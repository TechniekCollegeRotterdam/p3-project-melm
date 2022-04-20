<?php
require("dbconnmelm.php");


if($_POST)
{
        require_once "dbconnmelm.php";
        $typeid = filter_var($_POST["typeid"], FILTER_SANITIZE_STRING);
        $query = $db->prepare("SELECT * FROM types WHERE idtype = :typeid");
        $query->bindValue(':typeid', $typeid);
        $query->execute();
        if($query->rowCount() <> 1 )
        {
               $_POST = False;
               echo "Geen matchend id.";
               
       }
}

if($_POST) {
    //$idproduct = trim($_POST['idproduct']);
    $typeid = (int)$_POST['typeid'];
    $stockquantity = (int)$_POST['stockquantity'];
    $price = (float) $_POST['price'];
    $imageref = trim($_POST['imageref']);
    $prodname = trim($_POST['prodname']);
    $proddesc = trim($_POST['proddesc']);
    $origincountry = trim($_POST['origincountry']);


    try{
        $sql = 'INSERT INTO product(typeid, stockquantity, price, imageref, prodname, proddesc, origincountry)
                VALUES(:typeid, :stockquantity, :price, :imageref, :prodname, :proddesc, :origincountry)';

        $stmt = $db->prepare($sql);
        //$stmt->bindParam(":idproduct", $idproduct);
        $stmt->bindParam(":typeid", $typeid);
        $stmt->bindParam(":stockquantity", $stockquantity);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":imageref", $imageref);
        $stmt->bindParam(":prodname", $prodname);
        $stmt->bindParam(":proddesc", $proddesc);
        $stmt->bindParam(":origincountry", $origincountry);
        $stmt->execute();
        if($stmt->rowCount()) {
            header("location: add.php?status=created");
            exit();
        }
        header( "location: add.php?status=fail_create");
        exit();
    } catch (Exception $e) {
       echo "error ". $e->getMessage();
       exit();
    }
} else {
    header("location: add.php?status=fail_create");
    exit();
}
?>