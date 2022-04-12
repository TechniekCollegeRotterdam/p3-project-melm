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



<<<<<<< HEAD
require_once 'dbconnect.php';
    if(isset($_POST['login'])){
   
    try{
        $sQuery = "SELECT * FROM client WHERE idclient = :idclient";
        $oStmt = $db->prepare($sQuery);
        $oStmt->bindValue (parameter: ':idclient', $_POST['klnr']);
        $oStmt->execute();
        if($oStmt->rowCount()==1){
            $rij = $oStmt->fetch(fetch_style:PDO::FETCH_ASSOC);
            if(password_verify($_POST['klww'],$rij['passwrd'])){
        
        
            $_SESSION ['idclient'] =$rij['idclient'];
            $_SESSION ['givenname'] =$rij ['givenname'];
            $_SESSION ['surname'] =$rij ['surname'];
            
            if($rij['beheer']=="j")
            {
                $_SESSION['blogin']=true;
                header(string:'Refresh: 3; url=admin.php');
                echo "Login succesvol";
            }
            
            else 
            {
                
                $_SESSION['login']= true;
                header(string: 'Refresh: 3; url=clientpagina.php');
                echo "login succesvol";
            }
        }
    }
}
catch{
    
}
    }
?>
=======
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
>>>>>>> 8bd960a0cb6d99cc22cfa2259d5a2c638afb187d


</body>


