<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>Inloggen Beheerder</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
		<h1>Company</h1>
    
	    <?php
	    	include "nav.html";
	    ?>
	</header>
    <main>
	<section class="section">
        <article class="article">
          <form action="#" method="#">
            <ul>
              <li>
                <label for="Email">Email</label>
                <input id="Email" type="Email" name="Email" placeholder="Email" autofocus>
              </li>
              <li>
                <label for="password">Password </label>
                <input id="password" type="password" name="password" placeholder="password">
              </li>
			  <input type="submit" value="log in">
</article>
</section>
</main>
</body>
</html>
// wat er in komt 
// invoer email 
// invoer wachtwoord
// als dat klopt
// wordt er in database gekeken of die persoon beheerder is 
// als persoon dat is wordt je ingelogged 