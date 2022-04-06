<?php

  $sname = "localhost";
  $givenname = "root";
  $emailadress = "";
  $passwrd = "";
  $isadmin = "";
 
  $db_name = "client";

  $conn = mysqli_connect($sname, $givenname, $emailadress, $password, $isadmin, $db_name);

  if(!$conn) {
      echo "Connection Failed";
  }