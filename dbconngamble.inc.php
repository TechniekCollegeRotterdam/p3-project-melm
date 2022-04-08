<?php

$servername = "localhost";
$dBGivenname = "root";
$dBPasswrd = "";
$dBName = "phpprojectp3";

$conn = mysqli_connect($servername, $dBGivenname, $dBPasswrd, $dBName);

id(!$conn){
    die("Sorry there is shit on the connection" . mysqli_connect_error());
}
?>