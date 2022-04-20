<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
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
		<h1>Product Toevoegen</h1>

		<?php
			include "navbeheer.html";
		?>
	</header>
<div class="container">
    <a href="admincheck.php" class="btn btn-light"><< Go Back</a>
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i>add new product for customers</strong>
            </div>
            <div class="card-body">
                <form action="create.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="typeid" class="col-form-label">typeid</label>
                            <input type="number" class="form-control" id="typeid" name="typeid" placeholder="typeid"
                            required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="stockquantity" class="col-form-label">aantal</label>
                            <input type="number" class="form-control" id="stockquantity" name="stockquantity" placeholder="stockquantity"
                            required>
                        </div>
                        <div class="form-group col-md4">
                            <label for="price" class="col-form-label">prijs</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="price"
                            required>
                        </div>
                        <div class="form-group col-md4">
                            <label for="imageref" class="col-form-label">Image URL</label>
                            <input type="text" class="form-control" id="imageref" name="imageref" placeholder="Image URL"
                            >
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="prodname" class="col-form-label">naam product</label>
                            <input type="text" class="form-control" id="prodname" name="prodname" placeholder="prodname"
                            required>
                        </div>
                            </div> <div class="form-group">
                            <label for="note" class="col-form-label">product descriptie</label>
                            <textarea name="proddesc" id="" rows="5" class="form-control"
                            placeholder="proddesc" required> </textarea>
                        </div>
                        </div>
                            </div> <div class="form-group col-md-6">
                            <label for="origincountry" class="col-form-label">Land van afkomst</label>
                            <input type="text" class="form-control" id="origincountry" name="origincountry" placeholder="origincountry"
                            required>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i>
                    Toevoegen </button>
                </form>
            </div>
        </div>

        <br>
    </div>
</body>
</html>
<?php
}
else {
    header("location: index.php");
    exit();
}
?>