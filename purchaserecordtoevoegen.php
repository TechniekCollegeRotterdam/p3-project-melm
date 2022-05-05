<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Purchase record toevoegen</title>
  <link rel="stylesheet" type="text/css" href="company.css">
</head>


<?php
include "nav.html";
?>

<?php
  try {
      $db = new PDO("mysql:host=localhost;dbname=melm", "root", "");
      $query = $db->prepare("INSERT INTO purchase(purchasedate, paidinfulldate, deliverydate, paidamount)
                        VALUES('Today', 'NULL', 'NULL', 0)");
      if($query->execute()) {
          echo "De nieuwe gegevens zijn toegevoegd.";
      } else {
          echo "Er is een fout opgetreden!";
      }
  } catch(PDOException $e) {
      die("Error!: " . $e->getMessage());
  }
?>
