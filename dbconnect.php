<?php

  $sname = "localhost";
  $unmae = "root";
  //$emailadress = "";
  $passwrd = "";
  //$isadmin = "";
  $db_name = "melm";
  $conn = mysqli_connect($sname, $unmae, $passwrd, $db_name);


  if(!$conn) {

      echo "Connection Failed";
  }
 

  //$servername = "localhost";
  //$givenname = "givenname";
  //$emailadress = "emailadress";
  //$passwrd = "passwrd";
  //$isadmin = "isadmin";
  //$dbname = melm

  //try {
  // $conn = new PDO("mysql:host=$servername;melm=client", $givenname, $emailaress, $passwrd, $isadmin);
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "connected successfully";

  //} catch (PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
  //}

  ?>