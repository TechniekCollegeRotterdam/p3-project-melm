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
  //if(isset($_POST['login']) && isset($_POST['passwrd'])){
    //function validate($data) {
        //$data = trim($data);
        //$data = stripslashes($data);
      //  $data = htmlspecialchars($data);
    //    return $data; 
  //  }
//}
$name = validate($_POST['givenname']) || $email = validate($_POST['emailadress']);
//$login = validate($_POST['login'])
$passwrd = validate($_POST['passwrd']);

//if(empty($login)) {
  //  header ("location: inlogbeheer.php?erro=User Name/Email is required");
    //exit();
//}
if(empty($name)) {
    header ("location: inlogbeheer.php?erro=User Name/Email is required");
    exit();
}
else if(empty($email)){
  header ("location: inlogbeheer.php?erro=User email is required");
    exit();
 }
else if(empty($passwrd)) {
    header("location: inlogbeheer.php?error=Password is required");
    exit();
}

//$sql = "SELECT * FROM client  WHERE (givenname='$login' OR emailadress='$login') AND passwrd='$passwrd' ";
$sql = "SELECT * FROM client  WHERE givenname='$name' AND emailadress='$email' AND passwrd='$passwrd' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
 if($row['givenname'] === $name && $row['passwrd'] === $passwrd)  // if($row['givenname'] === $login && $row['passwrd'] === $pass) 
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
        header("location: inlogbeheer.php?error=Incorrect User Name email or Password or your no admin");
        exit();
    }
}
 
 else if($row['emailadress'] === $email && $row['passwrd'] === $passwrd) //elseif($row['emailadress'] === $login && $row['passwrd'] === $passwrd) 
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
    header("location: inlogbeheer.php?error=Incorrect User Name email or Password or your no admin");
    exit();
 }
 }
 else {
    header("location: inlogbeheer.php");
    exit();
}
}