<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       
<?php
$errorFree = true;
echo "<br><main>";
if(! isset($_POST["registratie"])) 
{

$errorFree = false;
echo"<div class= 'container'>";
echo"<div class= 'panel panel-primary'>";
echo"<div class= 'panel-heading'>Helaas, registratie is niet gelukt</div>";
echo"<div class= 'panel-body'>U zult eerst (al) uw gegevens moeten invullen</div>";
echo"</div>";
echo"</div>";

exit();

}


if($errorFree && $_POST['passwrd1']!==$_POST['passwrd2'])
{

$errorFree = false;
echo"<div class='conatiner'>";
echo"<div class='panel panel-primary'>";
echo"<div class='panel-heading'>Helaas, registratie is niet gelukt</div>";
echo"<div class='panel-body'>De beide wachtwoorden moeten aan elkaar gelijk zijn</div>";
echo"</div>";
echo"</div>";
}


if($errorFree)
{

require_once "db.connect.php";
$eml = filter_var($_POST["emailAdress"], FILTER_SANITIZE_STRING);
$query = $db->prepare("SELECT * FROM client WHERE emailadress = :eml");
$query->bindValue(':eml', $eml);
$query->execute();
if($query->rowCount()<>0)

{
$errorFree = false;
echo"<div class='conatainer'>";
echo"<div class='panel panel-primary'>";
echo"<div class='panel heading'>Helaas, registratie is niet gelukt</div>";
echo"<div class='panel-body'>Het gekozen email-adres is al in gebruik</div>";
echo"</div>";
echo"</div>";
}
}




if($errorFree)

try
{

$gn = filter_var($_POST["givenName"], FILTER_SANITIZE_STRING);
$sn = filter_var($_POST["surname"], FILTER_SANITIZE_STRING);
$intitl = filter_var($_POST["midInitials"], FILTER_SANITIZE_STRING);
$ttl = filter_var($_POST["title"], FILTER_SANITIZE_STRING);

$stradr = filter_var($_POST["streetadress"], FILTER_SANITIZE_STRING);
$zip = filter_var($_POST["zipcode"], FILTER_SANITIZE_STRING);


$phone = filter_var($_POST["phonenr"], FILTER_SANITIZE_STRING);

$occ = filter_var($_POST["occupation"], FILTER_SANITIZE_STRING);

$pw=password_hash($_POST[])



}





?>


</body>
</html>