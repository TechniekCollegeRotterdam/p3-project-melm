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
    $idproduct = (int) $_POST['idproduct'];
    $typeid = (int)$_POST['typeid'];
    $stockquantity = (int)$_POST['stockquantity'];
    $price = (float) $_POST['price'];
    $imageref = trim($_POST['imageref']);
    $prodname = trim($_POST['prodname']);
    $proddesc = trim($_POST['proddesc']);
    $origincountry = trim($_POST['origincountry']);


    try{
        $sql = 'UPDATE product 
        SET typeid = :typeid, stockquantity = :stockquantity, price = :price, imageref = :imageref, prodname = :prodname, proddesc = :proddesc, origincountry = :origincountry 
        WHERE idproduct = :idproduct';

        $stmt = $db->prepare($sql);
        $stmt->bindParam(":typeid", $typeid);
        $stmt->bindParam(":stockquantity", $stockquantity);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":imageref", $imageref);
        $stmt->bindParam(":prodname", $prodname);
        $stmt->bindParam(":proddesc", $proddesc);
        $stmt->bindParam(":origincountry", $origincountry);
        $stmt->bindParam(":idproduct", $idproduct);
        $stmt->execute();
        if($stmt->rowCount()) {
            header("location: edit.php?id=".$idproduct."status=update_done");
            exit();
        }
        header("location: edit.php?id=".$idproduct."status=fail_update");
        exit();
    } catch (Exception $e) {
       echo "error ". $e->getMessage();
       exit();
    }
} else {
    header("location: edit.php?id=".$idproduct."fail_update");
    exit();
}
?>