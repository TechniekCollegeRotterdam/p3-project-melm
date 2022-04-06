<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>admin home</title>
</head>
<body>
    <h1>hello, <?php echo $_SESSION['givenname'];?></h1>
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