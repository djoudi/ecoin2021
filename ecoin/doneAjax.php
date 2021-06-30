<?php 
require 'inc/config.php';
require 'inc/functions.php';
$nom = $_POST['nom'];
$descs = $_POST['descs'];

$sql = "INSERT INTO category(id,nom,descs) VALUES(NULL,'$nom','$descs')";


$q = mysqli_query($connect,$sql);

if ($q) {
	echo 1;
}else {
	echo 0;
}

 ?>