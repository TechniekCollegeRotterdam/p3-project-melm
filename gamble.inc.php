<?php

if (isstet($_POST["submit"])) {

    $givenname = $POST["uid"];
    $passwrd = $_POST["passwrd"];

    require_once 'dbconngamble.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($givenname, $passwrd, $isadmin)!== false){
        Header("location: ../gamble.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $givenname, $passwrd, $isadmin)
}
else {
    header("location: ../gamble.php");
    exit();
}
?>