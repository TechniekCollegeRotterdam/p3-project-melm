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
    header("location: chn.php");
    exit();
}
$product = $stmt ->fetch();

?>
<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Product Toevoegen</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
	<header>
		<h1>Product Wijzigen</h1>
	</header>
<div class="container">
    <a href="chn.php" class="btn btn-light"><< Go Back</a>
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-edit"></i>Edit Product</strong>
            </div>
            <div class="card-body">
                <form action="update.php" method="post">
                    <input type="hiddent" name="idproduct"  value="<?= $product['idproduct'] ?>"> Warning you can not change the id of the product.
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="typeid" class="col-form-label">typeid</label>
                            <input type="number" class="form-control" id="typeid" name="typeid" placeholder="typeid"
                            required value="<?= $product['typeid']?>">Warning, only change the typeid to a existing one from 1 to 7 no 8+.
                        <div class="form-group col-md-4">
                            <label for="stockquantity" class="col-form-label">aantal</label>
                            <input type="number" class="form-control" id="stockquantity" name="stockquantity" placeholder="stockquantity"
                            required value="<?= $product['stockquantity']?>">
                        </div>
                        <div class="form-group col-md4">
                            <label for="price" class="col-form-label">prijs</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="price"
                            required value="<?= $product['price']?>">
                        </div>
                        <div class="form-group col-md4">
                            <label for="imageref" class="col-form-label">Image URL</label>
                            <input type="text" class="form-control" id="imageref" name="imageref" 
                            placeholder="Image URL" value="<?= $product['imageref']?>"> 
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="prodname" class="col-form-label">naam product</label>
                            <input type="text" class="form-control" id="prodname" name="prodname" placeholder="prodname"
                            required value="<?= $product['prodname']?>">
                        </div>
                            </div> <div class="form-group">
                            <label for="note" class="col-form-label">product descriptie</label>
                            <textarea name="proddesc" id="" rows="5" class="form-control"
                            placeholder="proddesc">  <?= $product['proddesc']?> </textarea>
                        </div>
                        </div>
                            </div> <div class="form-group col-md-6">
                            <label for="origincountry" class="col-form-label">Land van afkomst</label>
                            <input type="text" class="form-control" id="origincountry" name="origincountry" placeholder="origincountry"
                            required value="<?= $product['origincountry']?>">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>
                    Wijzigen </button>
                </form>
            </div>
        </div>

        <br>
    </div>
</body>
</html>
<?php