<?php
session_start();
require 'admincheck.php';
require 'dbconnmelm.php';
?>
<?php 
if(!isset($_SESSION['blogin']) || $_SESSION['blogin'] == false)
{
    header(string:'location: inlogbeheer.php');
    exit();
}
?>