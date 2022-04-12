<?php
session_start();
include "dbconngamble.php";

if(isset($_POST['givenname']) && isset($_POST['passwrd'])){
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }
}
 elseif(isset($_POST['emailadress']) && isset($_POST['passwrd'])){ 
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data; 
    }
  }

$name = validate($_POST['givenname']) || $email = validate($_POST['emailadress']);
$passwrd = validate($_POST['passwrd']);

if(empty($name)) {
    header ("location: gamble.php?erro=User Name is required");
    exit();
}
else if(empty($email)){
  header ("location: gamble.php?erro=User email is required");
    exit();
 }
else if(empty($passwrd)) {
    header("location: gamble.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM client  WHERE givenname='$name' AND emailadress='$email' AND passwrd='$passwrd' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    if($row['givenname'] === $name && $row['passwrd'] === $passwrd) 
    {
        
        $_SESSION['givenname'] = $row['givenname'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['idclient'] = $row['idclient'];
        if($row['isadmin']=="yes")
        {
        header("location: admincheck.php");
        echo "logged in!";
        exit();
        }
      else
    {
        header("location: gamble.php?error=Incorrect User Name email or Password or your no admin");
        exit();
    }
}
 elseif($row['emailadress'] === $email && $row['passwrd'] === $passwrd) 
 {
        
    $_SESSION['givenname'] = $row['givenname'];
    $_SESSION['surname'] = $row['surname'];
    $_SESSION['idclient'] = $row['idclient'];
    if($row['isadmin']=="yes")
    {
    header("location: admincheck.php");
    echo "logged in!";
    exit();
    }
  else
 {
    header("location: gamble.php?error=Incorrect User Name email or Password or your no admin");
    exit();
 }
 }
 else {
    header("location: gamble.php");
    exit();
}
}