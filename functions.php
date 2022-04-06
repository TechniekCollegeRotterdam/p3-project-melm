<?php
session_start();
include "dbconngamble.php";

if(isset($_POST['givenname']) && isset($_POST['passwrd'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$givenname = validate($_POST['givenname']);
$passwrd = validate($_POST['passwrd']);

if(empty($givenname)) {
    header ("location: gamble.php?erro=User Name is required");
    exit();
}
else if(empty($passwrd)) {
    header("location: gamble.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM client  WHERE givenname='$givenname' OR isadmin = yes AND passwrd='pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['givenname'] === $givenname && $row['passwrd'] === $pass && $row['isadmin'] = yes) {
        echo "logged in!";
        $_SESSION['givenname'] = $row['givenname'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['idclient'] = $row['idclient'];
        header("location: admincheck.php");
        exit();
    }
    else{
        header("location: gamble.php?error=Incorrect User Name or Password");
        exit();
    }
}
else {
    header("location: gamble.php");
    exit();
}