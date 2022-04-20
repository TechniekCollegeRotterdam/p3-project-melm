<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="regisproces.php">
</head>

<body>
       <header>
              <h1 class="Registratie">Registratie</h1>
              <?php
	
	    require_once "dbconnect.php";
           $query = $db->prepare("SELECT * FROM country");
           $query->execute();
           $result=$query->fetchAll(PDO::FETCH_ASSOC);

           ?>
       </header>
       <main>

              <form method="POST" class="registratie" id="registratie" action="regisproces.php">

                     <section class="registratie-section">

                            <input type="text" name="idClient" class="form-control"
                                   placeholder="Klantnummer wordt automatisch bepaald" disabled>


                            <br>
                            <label name="surname"> Achternaam *</label>
                            <input type="text" name="surname" placeholder="Doe">


                            <br>
                            <label name="givenname">Voornaam *</label>
                            <input type="text" name="givenname" placeholder="Jack">


                            <br>
                            <label for="middlename">Tweede naam *</label>
                            <input type="text" name="middlename" placeholder="Tom">


                            <br>
                            <label for="titel">Titel *</label>
                            <br>
                            <label for="mr">Mr </label>
                            <input type="radio" name="titel" id="mr" value="Mr">
                            <br>
                            <label for="mrs">Mrs </label>
                            <input type="radio" name="titel" id="mrs" value="Mrs">
                            <br>
                         

                       
                            <label >Geslacht *</label>
                            <br>
                            <label for="genMale">Man </label>
                            <input type="radio" name="gender" id="genMale" value="male">
                            <br>
                            <label for="genFem">Vrouw </label>
                            <input type="radio" name="gender" id="genFem" value="female">



                            <br>
                            <label name="straatnaam">Straatnaam *</label>
                            <input type="text" name="straatnaam" placeholder="Hooghweg">


                            <br>
                            <label name="stad">Stad *</label>
                            <input type="text" name="stad" placeholder="Rotterdam">


                            <br>
                            <label name="postcode">Postcode *</label>
                            <input type="text" name="postcode" placeholder="3030AA">


                            <br>
                            <label name="land">Selecteer uw land *</label>
                            <select class="land" id="country" name="country" required>
                                   <?php
foreach($result as $rij)
{

echo '<option value="'. $rij['idcountry'].'">';
echo  $rij['code'].' - '.$rij['name'];
echo '<option/>';
}

?>
                            </select>


                            <br>
                            <label name="tel">Telefoonnummer *</label>
                            <input type="text" name="tel" placeholder="06 99 88 77 66">


                            <br>
                            <label name="birhtday">Geboortedatum *</label>
                            <input type="date" name="birthday" placeholder="date">


                            <br>
                            <label name="beroep">Beroep *</label>
                            <input type="text" name="beroep" placeholder="beroep">

                            <br>
                            <label name="email">Email *</label>
                            <input type="text" name="email" placeholder="email@gmail.com">


                            <?php
if(isset($_POST['account aanmaken'])) {
       $check = filter_input(INPUT_POST, "tekstvak",
       FILTER_VALIDATE_EMAIL);
       if(!$check) {
              echo "Fout! Invoer is geen e-mailadres!";
       }
}
?>
                            <br>
                            <label for="passwrd1">wachtwoord *</label>
                            <input type="password" name="passwrd1" placeholder="***">

                            <br>
                            <label for="passwrd2">Herhaal wachtwoord *</label>
                            <input type="password" name="passwrd2" placeholder="***">

                     </section>
                     <section class="submit-reset">
                            <input type="submit" name="account-aanmaken" value="account-aanmaken">
                            <input type="reset" name="herstel" value="opnieuw-invullen">
                     </section>

       </main>
       <footer>

       </footer>
</body>

</html>