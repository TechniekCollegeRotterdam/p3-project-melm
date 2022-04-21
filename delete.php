<?php
require("dbconnmelm.php");

if (isset($_GET['idproduct'])) {

    try{
       $sql = 'DELETE FROM product WHERE  idproduct = :idproduct LIMIT 1';
       $stmt = $db->prepare($sql);
       $stmt->bindParam(":idproduct", $_GET['idproduct'], PDO::PARAM_INT);
       $stmt->execute();
       if($stmt->rowCount()) {
           header("location: del.php?status=deleted");
           exit();
       }
       header("location: del.php?status=fail_delete");
       exit();
    } catch (Exception $e){
        echo "Error" . $e->getMessage();
        exit();
    }
} else {
    header("location: del.php?staus=fail_delete");
    exit();
}
