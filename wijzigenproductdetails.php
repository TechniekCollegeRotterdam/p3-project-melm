<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Wijzigen producten details</title>
  <link rel="stylesheet" type="text/css" href="company.css">
  <style>
      label {
        margin-top: 10px;
        margin-bottom: 1000px;
        margin-right: 2000px;
        margin-left: 0px;
        color: white;
      }
  </style>
</head>

<?php
include "nav.html";
?>

<?php
  try {
    $db = new PDO("mysql:host=localhost;dbname=melm", "root", "");
    if(isset($_POST['verzenden'])) {
      $prodname = filter_input(INPUT_POST, "prodname", FILTER_SANITIZE_STRING);
      $price = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

      $query = $db->prepare("UPDATE product SET prodname = :prodname, price = :price WHERE idproduct = :idproduct");
      $query->bindParam("prodname", $prodname);
      $query->bindParam("price", $price);
      $query->bindParam("idproduct", $_GET['idproduct']);
      if($query->execute()) {
        echo "De nieuwe gegevens zijn toegevoegd.";
      } else {
          echo "Er is een fout opgetreden!";
      }
      echo "<br>";
    } else {
        $query = $db->prepare("SELECT * FROM product WHERE idproduct = :idproduct");
        $query->bindParam("idproduct", $_GET['idproduct']);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data) {
            $prodname = $data["prodname"];
            $price = $data["price"];
        }
    }
} catch(PDOException $e) {
  die("Error!: " . $e->getMessage());
}
?>

<form method="post" action="">
<div>
    <label>Merk</label>
    <input type="text" name="prodname"><br>
    <label>Prijs</label>
    <input type="text" name="price"><br>

    <input type="submit" name="verzenden" value="Opslaan">
</div>
</form>