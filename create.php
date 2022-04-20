<?php
require("dbconnmelm.php");

if($_POST) {
    $idproduct = trim($_POST['idproduct']);
    $typeid = (int)$_POST['typeid'];
    $stockquantity = (int)$_POST['stockquantity'];
    $price = (float) $_POST['price'];
    $imageref = trim($_POST['imageref']);
    $prodname = trim($_POST['prodname']);
    $proddesc = trim($_POST['proddesc']);
    $origincountry = trim($_POST['origincountry']);


    try{
        $sql = 'INSERT INTO product(idproduct, typeid, stockquantity, price, imageref, prodname, proddesc, origincountry)
                VALUES(:idproduct, :typeid, :stockquantity, :price, :imageref, :prodname, :proddesc, :origincountry)';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":idproduct", $idproduct);

    } catch (Exception)
}
?>