<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css%22%3E
    <link rel="stylesheet" href="company.css">
</head>
<header>

    <?php include "nav.html";?>

</header>

<body>
   
<?php

require_once 'dbconnect.php';
    if(isset($_POST['login'])){
   
    try{
        $sQuery = "SELECT * FROM client WHERE clientid = :clientid";
        $oStmt = $db->prepare($sQuery);
        $oStmt->bindValue (parameter: ':clientid', $_POST['klnr']);
        $oStmt->execute();
        if($oStmt->rowCount()==1){
            $rij = $oStmt->fetch(fetch_style:PDO::FETCH_ASSOC);
            if(password_verify($_POST['klww'],$rij['password'])){
        
        
            $_SESSION ['clientid'] =$rij['clientid'];
            $_SESSION ['voornaam'] =$rij ['voornaam'];
            $_SESSION ['achternaam'] =$rij ['achternaam'];
            
            if($rij['beheer']=="j")
            {
                $_SESSION['blogin']=true;
                header(string:'Refresh: 3; url=index.php');
                echo "Login succesvol";
            }
            
            else 
            {
                
                $_SESSION['login']= true;
                header(string: 'Refresh: 3; url=mijnpagina.php');
                echo "login succesvol";
            }
        }
    }
}
catch{
    
}
    }
?>


</body>

</html>