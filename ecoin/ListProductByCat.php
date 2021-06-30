<?php include "inc/header.php" ;
require 'inc/config.php';
require 'inc/functions.php';
$cid = isset($_GET['s'])?$_GET['s']:NULL;

$list = productByCat($cid);

?>
	<?php 
 foreach ($list as  $value):
 ?>
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title"><?=$value['nom'] ?></h5>
    <p class="card-text"><?=$value['descs'] ?></p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
	<?php 
 endforeach;
 ?>
<?php include "inc/footer.php" ?>