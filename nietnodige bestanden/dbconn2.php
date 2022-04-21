<?php


const USERNAME = "root";
const PASSWORD = "";
const DSN      = "mysql:host=localhost;dbname=melm";

try {
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "connected";
} catch (Exception $e) {
    echo "Error". $e->getMessage();
    exit()
}