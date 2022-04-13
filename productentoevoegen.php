<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Producten toevoegen</title>
  <link rel="stylesheet" type="text/css" href="company.css">
</head>
<?php
include "nav.html";
?>

<?php
$db = new PDO('mysql:host=localhost;dbname=melm', 'root' ,'');
  
if(isset($_POST['verzenden'])) {
    $merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
    $prijs = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    
    $query = $db->prepare("INSERT INTO cars (merk,type,prijs)
    VALUES (:merk, :type, :prijs)");

    $query->bindParam("merk", $merk);
    $query->bindParam("type", $type);
    $query->bindParam("prijs", $prijs);

    if($query->execute()) {
        echo "De nieuwe gegevens zijn toegevoegd.";}
        else{
        echo "Er is een fout opgetreden!";
        }
        echo "<br>";
        
    catch (PDOException $e){
            die ("Error!" . $e->getMessage());
        }
        }
    ?>

    <form method="post" action="">
        <label>Merk</label>
        <input type="text" name="merk"><br>

        <label>Type</label>
        <input type="text" name="Type"><br>

        <label>Prijs</label>
        <input type="text" name="Prijs"><br>

        <input type="submit" name="verzenden" value="opslaan">
    </form>