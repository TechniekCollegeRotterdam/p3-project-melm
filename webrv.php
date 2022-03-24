<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
	 <title>review website</title>
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
		
	<h1>Reacties</h1>
            <form action="beoordeling.html" method="post">
                <ul>
                    <li>
                        <label for="text">username</label>
                        <input id="text" type="text" name="Acthernaam" autofocus>
                    <li>
                        <label for="email">email</label>
                        <input id="email" type="email" name="email">
</li>
                    <br>
                    <li>
                        geslacht:
                        <input type="radio" name="gender" value="female">vrouw
                        <input type="radio" name="gender" value="male">Man
                        <input type="radio" name="gender" value="other">ander
                    </li>
                    <br>
                    <li>
                    Werkten alle pagina's en functies op website Ja of nee? ?
                        <input type="radio" name="what" value="ja">ja 
                        <input type="radio" name="what" value="nee"> nee
                    </li>
                    <br>
                    <li>
                    Als nee hoe? <textarea name="comment" rows="5" cols="40"></textarea>
                     </li>
                     <br>
                    <li>
                        <label for="range">van 1 tot 10 hoe goed werkend is de website?
                        </label>
                        <input id="range" type="range" name="range" Value="0" min="1" max="10" step="1">
                    </li>
				<li>
                   opmerking over website <textarea name="comment" rows="5" cols="40"></textarea>
                    </li>
</ul>
                <input type="Reset" value="Reset">
                <input type="submit" value="Versturen">
            </form>
    </main>
</body>
</html>