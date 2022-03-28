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
        $query = $db->prepare("SELECT * FROM client WHERE email = :eml");
        $query->bindValue(':eml', $eml);
        $query->execute();
        if($query->rowCount()<>0);
        {
               $errorVrij = false;

        }
}
echo "Helaas, registratie is niet gelukt.";
echo "Het gekozen email-adres is al in gebruik.";


if($errorVrij)
{

try{
       $gn = filter_var($_POST["naam"], FILTER_SANITIZE_STRING);
       $sn = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
       $initl = filter_var($_POST["naamm"], FILTER_SANITIZE_STRING);
       $ttl = filter_var($_POST["titel"], FILTER_SANITIZE_STRING);
       $stradr = filter_var($_POST["straatnaam"], FILTER_SANITIZE_STRING);
       $cty = filter_var($_POST["stad"], FILTER_SANITIZE_STRING);
       $zip = filter_var($_POST["postcode"], FILTER_SANITIZE_STRING);
       $phone = filter_var($_POST["tel"], FILTER_SANITIZE_STRING);
       $occ = filter_var($_POST["beroep"], FILTER_SANITIZE_STRING);

       $pw=password_hash($_POST['passwrd1'], PASSWORD_DEFAULT);


$query = $db->prepare("INSERT INTO client (surname , givenname, middleinitials, title, gender, streetadress, city, zipcode, countryid, emailadress, telephonenumber, birthday,
occupation")
VALUES (:)




       }




}






?>

</body>

</html>