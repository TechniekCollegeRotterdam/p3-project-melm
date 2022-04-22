<?php
session_start();

if(isset($_SESSION['idclient']) && isset($_SESSION['givenname'])) {
?>
<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Verwijderen producten</title>
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
		<?php
			include "navbeheer.html";
		?>
		<h1>Verwijderen producten</h1>
	</header>
	<div class="container">
	<a href="admincheck.php" class="btn btn-light"><< Go Back</a>
		<div class="card border-danger">
			<div class="card-header bg-danger text-white">
				<strong><i class="fa fa-database"></i>products</strong>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<h5 class="card-title float-left">Table Products</h5>
					</div>
				</div>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>typeid</th>
							<th>stockquantity</th>
							<th>price</th>
							<th>prodname</th>
							<th>origincountry</th>
							<th style="width: 20%;">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($result->rowCount() > 0) : ?>
						<?php foreach ($result as $product) : ?>
						<tr>
							<td><?=$product['typeid']?></td>
							<td><?=$product['stockquantity']?></td>
							<td>$<?= number_format($product['price'], 2)?></td>
							<td><?=$product['prodname']?></td>
							<td><?=$product['origincountry']?></td>
							<td>
								<a href="delt.php?idproduct=<?=$product['idproduct']?>" class="btn btn-sm btn-danger" >delete<i class="fa fa-trash"></i></a>
							
							</td>
						</tr>
						<?php endforeach ?>
						<?php endif ?>
					</tbody>
				</table>
			</div>
		</div>
		<br>
	</div>
	<footer>
		<div class="container">
			<span class="text-muted">&copy; by maik </span>
		</div>
	</footer>
</body>

</html>
<?php
}
else {
    header("location: index.php");
    exit();
}
?>