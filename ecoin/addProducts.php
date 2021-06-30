<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php 
require 'inc/config.php';
$nom = (isset($_POST['nom']))?$_POST['nom']:NULL;
$descs = (isset($_POST['descs']))?$_POST['descs']:NULL;
$category = (isset($_POST['category']))?$_POST['category']:NULL;
$prix = (isset($_POST['prix']))?$_POST['prix']:NULL;
$send= (isset($_POST['go']))?$_POST['go']:NULL;

if ($send=='ok') {
	$sql = "INSERT INTO `products`(`id`,`nom`,`descs`,`category`,`prix`) 
			VALUES (NULL,'$nom','$descs',$category,$prix)";
  $q = mysqli_query($connect,$sql) or die(mysqli_errno($q));

  if ($q) {
  	header("Location:index.php");
  }
}

 ?>

	<form method="post" action="">
		<div>
			Nom <input type="text" name="nom">
		</div>

		<div>
			desc <textarea name="descs" id="" cols="30" rows="10"></textarea>
		</div>

		<div>
			Category 

			<select name="category">
				<option value="" selected> Select You Cat</option>
				<option value="1">Laptop</option>
				<option value="2">Ecran</option>
				<option value="3">Phone</option>
				<option value="4">Cars</option>
			</select>
		</div>
		<div>
			Prix <input type="text" name="prix">
		</div>

        <input type="hidden" name="go" value="ok">
		<div>
			<button type="submit">Add Product</button>
		</div>
	</form>
	
</body>
</html>