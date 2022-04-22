<?php
require("dbconnmelm.php");
$idproduct = $_GET['idproduct'] ? intval($_GET['idproduct']) : 0;

try {
    $sql = "SELECT * FROM product WHERE idproduct = :idproduct LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":idproduct", $idproduct, PDO::PARAM_INT);
    $stmt->execute();
} catch (Exception $e) {
    echo "Error" . $e->getMessage();
    exit();
}

if (!$stmt->rowCount()) {
    header("location: del.php");
    exit();
}
$product = $stmt ->fetch();


?>


<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Verwijderen</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
	<?php 
	require("dbconnmelm.php");

	try {
      $sql = "SELECT * FROM product";
	  $result = $db->query($sql);

	} catch (Exception $e) {
      echo "Error " . $e->getMessage();
	  exit();
	}

	?>
	<header>
 <div class="container">
    <div class="card border-danger">
		<div class="card-header bg-danger text-white">
			<strong><i class="fa fa-database"></i>show product</strong>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-9">
			<table class="table table-bordered table-striped">
			<tr>
                <th>idproduct</th>
                <td><?= $product['idproduct'] ?></td>
                <th>typeid</th>
                <td><?= $product['typeid']?></td>
            </tr>
            <tr>
                <th>Aantal</th>
                <td><?= $product['stockquantity'] ?></td>
                <th>prijs</th>
                <td>$<?= number_format($product['price'], 2) ?></td>
            </tr>  
            <div class="col-3">
               <img src="<?= $product['imageref'] ?>" alt="<?= $product['prodname'] ?>" class="img-fluid
               img-thumbnail">
        </div>
           <tr>
           <th>Naam</th>    
           <td><?= $product['prodname'] ?></td>
            <th>Description</th>
            <td colspan="3"><?= $product['proddesc'] ?></td>
            </tr>
            <tr>
                <th>land van afkomst</th>
                <td><?= $product['origincountry'] ?></td>
            </tr>
			</table>
        </div>
        <a href="delete.php?idproduct=<?= $product['idproduct'] ?>" class="btn btn-outline-success">save changes</a>
										
	</div>
</div>
</div>
	<br>
	</div>
    <a href="del.php" class="btn btn-danger"><< Go Back</a>
</body>

</html>

