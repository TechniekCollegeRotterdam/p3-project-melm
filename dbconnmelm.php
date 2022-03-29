<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=melm", "root", "");
    } catch(PDOException $e) {
        die(" ERROR!!! :  ". $e->getMessage());
    }
?>