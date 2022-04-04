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
       $errorVrij = true;
      echo "<br><main>";


if(isset($_POST["account aanmaken"]))
{

       $errorVrij = false;
echo "Helaas, registratie is niet gelukt.";
echo "U zult eerst al (uw) gegevens moeten invullen.";

 exit();

}


if($errorVrij && $_POST['passwrd1']!==$_POST['passwrd2'])
{

$errorVrij = false;
echo "Helaas, registratie is niet gelukt.";
echo "De beide wachtwoorden moeten aan elkaar gelijk zijn.";

}

if($errorVrij)
{
        require_once "dbconnect.php";
        $eml = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
        $query = $db->prepare("SELECT * FROM client WHERE emailadress = :eml");
        $query->bindValue(':eml', $eml);
        $query->execute();
        if($query->rowCount()<>0)
        {
               $errorVrij = false;

               echo "Helaas, registratie is niet gelukt.";
               echo "<br>Het gekozen email-adres is al in gebruik.";
       }
}


if($errorVrij)
{

try{
       $gn = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
       $sn = filter_var($_POST["surname"], FILTER_SANITIZE_STRING);
       $initl = filter_var($_POST["middlename"], FILTER_SANITIZE_STRING);
       $ttl = filter_var($_POST["titel"], FILTER_SANITIZE_STRING);
       $stradr = filter_var($_POST["straatnaam"], FILTER_SANITIZE_STRING);
       $cty = filter_var($_POST["stad"], FILTER_SANITIZE_STRING);
       $zip = filter_var($_POST["postcode"], FILTER_SANITIZE_STRING);
       $phone = filter_var($_POST["tel"], FILTER_SANITIZE_STRING);
       $occ = filter_var($_POST["beroep"], FILTER_SANITIZE_STRING);

       $pw=password_hash($_POST['passwrd1'], PASSWORD_DEFAULT);


$query = $db->prepare("INSERT INTO client (surname , givenname, middleinitial, title,
 gender, streetadress, city, zipcode, countryid, emailadress, telephonenumber, birthday,
occupation, wachtwoord)

VALUES (:surname, :name, :middlename, :titel, :geslacht, :straatnaam,
 :stad, :postcode, :land, :tel, :birthday, :beroep, :email, :wachtwoord)");

$query->bindValue(':name', $gn);
$query->bindValue(':surname', $sn);
$query->bindValue(':middlename', $initl);
$query->bindValue(':titel', $ttl);
$query->bindValue(':gender', $_POST['gender']);
$query->bindValue(':straatnaam', $stradr);
$query->bindValue(':city', $cty);
$query->bindValue(':email', $eml);
$query->bindValue(':tel', $phone);
$query->bindValue(':birthday', $_POST['birthday']);
$query->bindValue(':beroep', $occ);
$query->bindValue(':wachtwoord', $pw);
$query->execute();
echo "Beste ".$gn." ".$sn.", uw registratie is succesvol";
echo "Uw klantnummer is: ".$db->lastInsertId()."";

}
catch(PDOExeption $e)
{
       $sMsg = '<p>
Regelnummer: '.$e->getLine().'<br />
Bestand: '.$e->getFile().'<br />
Foutmelding: '.$e->getMessage().'
       </p>';
       trigger_error($sMsg);
}
       }

?>

</body>

</html>