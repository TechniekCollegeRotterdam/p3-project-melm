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
        <!--  menu opgehaald. -->

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
inlogproces klant
<?php
session_start();
    if(isset ($_POST['submitBtnLogin'])) {
    require 'dbconnect.php';
    $userId = $_POST['userid'];
    $pword = $_POST['password'];
    try {
        $query = "SELECT * FROM client WHERE emailadress = :email";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':email', $userId);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($pword, $result['passwrd']))
            {
                $_SESSION['clogin'] = true;
                $_SESSION['idclient'] = $result['idclient'];
                $_SESSION['surname'] = $result['surname'];
                $_SESSION['givenname'] = $result['givenname'];
                echo "<p>";
                echo "U bent succesvol ingelogd!";
                echo "</p>";
                header('Refresh: 3; url=homeklant.php');


            } else {
                echo "<p>";
                echo "Combinatie klopt niet!";
                echo "</p>";
                header('Refresh: 3; url=index.php');
    exit(); 
            }
        } else {
            echo "<p>";
            echo "Combinatie klopt niet!";
            echo "</p>";
            header('Refresh: 3; url=index.php');
    exit(); 
        }
    } catch(PDOException $e)
    {
    $sMsg = '<p>
    Regelnummer: '.$e->getLine().'<br> />
    Bestand: '.$e->getFile().'<br> />
    Foutmelding: '.$e->getMessage().'
    </p>';
    trigger_error($sMsg);
    }
    }

?>

