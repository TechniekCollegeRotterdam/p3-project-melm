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
include "nav.html";
?>

<form action="contact.php" method="post">
  <section class="elem-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="peter wick" pattern=[A-Z\sa-z]{3,20} required>
  </section>

  <section class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="Peter.wick@gmail.com" required>
  </section>

  <section class="elem-group">
    <label for="department-selection">Bent u tevreden met de website?</label>
    <select id="department-selection" name="concerned_department" required>
        <option value="">erg tevrede</option>
        <option value="billing">ging wel</option>
        <option value="marketing">slecht</option>
        <option value="technical support">super slecht</option>
    </select>
  </section>

  <section class="elem-group">
    <label for="title">Reden waarom u dit stuurt?</label>
    <input type="text" id="title" name="email_title" required placeholder="Ik heb me bestelling niet binnen gekregn" pattern=[A-Za-z0-9\s]{8,60}>
  </section>
  
  <section class="elem-group">
    <label for="message">type hier u bericht</label>
    <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
  </section>
  <button type="submit">verstuur bericht</button>
</form>

<?php



?>
</body>
</html>