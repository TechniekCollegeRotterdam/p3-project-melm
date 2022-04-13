<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Wachtwoord wijzigen</title>
  <link rel="stylesheet" type="text/css" href="company.css">
</head>
<?php
include "nav.html";
?>

<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=melm', 'root' ,'');
    $query = $db->prepare("INSERT INTO gebruikers (username, password) VALUES('ik','". sha1('geheim'). "')");

 if ($query->execute()) {

    echo "de nieuwe gegevens zijn toegevoegd.";
 } else {
     echo "er is een fout opgetreden!";
 }
  
 catch (PDOException $e){

  die("Error! : " . $e->getMessage());
 }
}
?>