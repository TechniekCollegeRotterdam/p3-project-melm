<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Login-Klant</title>
  <link rel="stylesheet" type="text/css" href="company.css">
</head>
<?php
include "nav.html";

?>



<body>
<header>
        <h1>melm</h1>
        <!--  menu opgehalen. -->

    </header>
  <main>

  <form method="post" action="inlogproces_klant.php">
  <table class="loginTable">
     <tr>
      <th>KLANT  LOGIN</th>
     </tr>
     <tr>
      <td>
        <label class="firstLabel">Username:</label>
        <input type="text" name="userid" id="userid" value="" autocomplete="off" />
      </td>
     </tr>
     <tr>
      <td><label>Password:</label>
        <input type="password" name="password" id="password" value="" autocomplete="off" /></td>
     </tr>
     <tr>
      <td>
         <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" />
      </td>
     </tr>
  </table>
</form>

  </main>


</body>


