<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
    ?>

    <!DOCTYPE html> 
    <html lang="en">
    <head>

        <title>admin home</title>
        <link rel="stylesheet" type="text/css" href="company.css">
    </head>
    <body>
       <h1>hello, <?php echo $_SESSION['givenname']; ?></h1>
       <a href="gamble2.php">Logout</a>
    </body>
    </html>

    <?php
}
else {
    header("location: index.php");
    exit();
}
?>