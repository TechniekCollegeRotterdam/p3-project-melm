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
                            <label name="name"> Achternaam *</label>
                            <input type="text" placeholder="Doe">


                            <br>
                            <label name="naam">Voornaam *</label>
                            <input type="text" placeholder="Jack">


                            <br>
                            <label name="naamm">Tweede naam *</label>
                            <input type="text" placeholder="Tom">


                            <br>
                            <label name="titel">Titel *</label>
                            <br>
                            <label name="titel">Mr </label>
                            <input type="radio" placeholder="mr">
                            <br>
                            <label name="titel">Mrs </label>
                            <input type="radio" placeholder="mrs">
                            <br>
                            <label name="titel">Ms </label>
                            <input type="radio" placeholder="ms">


                            <br>
                            <label name="Geslacht">Geslacht *</label>
                            <br>
                            <label name="gender">Man </label>
                            <input type="radio" placeholder="geslacht">
                            <br>
                            <label name="gender">Vrouw </label>
                            <input type="radio" placeholder="geslacht">


                            <br>
                            <label name="straatnaam">Straatnaam *</label>
                            <input type="text" placeholder="Hooghweg">


                            <br>
                            <label name="stad">Stad *</label>
                            <input type="text" placeholder="Rotterdam">


                            <br>
                            <label name="postcode">Postcode *</label>
                            <input type="text" placeholder="3030AA">


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
                                   <input type="tel" placeholder="06 99 88 77 66">


                                   <br>
                                   <label name="birhtday">Geboortedatum *</label>
                                   <input type="date" placeholder="date">


                                   <br>
                                   <label name="beroep">Beroep *</label>
                                   <input type="text" placeholder="beroep">

                                   <br>
                                   <label name="email">Email *</label>
                                   <input type="text" placeholder="email@gmail.com">

                                   <br>
                                   <label for="passwrd1">wachtwoord *</label>
                                   <input type="text" placeholder="***">

                                   <br>
                                   <label for="passwrd2">Herhaal wachtwoord *</label>
                                   <input type="text" placeholder="***">





                     </section>
                     <section class="submit-reset">
                            <input type="submit" name="account aanmaken" value="account aanmaken">
                            <input type="reset" name="herstel" value="opnieuw invullen">
                     </section>




       </main>
       <footer>

       </footer>
</body>

</html>