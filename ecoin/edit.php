<?php 
include 'inc/header.php';
require 'inc/config.php';

$cid = isset($_GET['q'])?$_GET['q']:NULL;

$sql = "SELECT * FROM products WHERE id= $cid limit 1";

  $q = mysqli_query($connect,$sql) or die("error");

  $num = mysqli_num_rows($q);

  if ($num == 1) {
        $data = mysqli_fetch_array($q,MYSQLI_ASSOC);
  }

 ?>

<form method="post" action="editDo.php">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom"  value="<?=$data['nom'] ?>">
  </div>

   <div class="input-group">
     <div class="input-group-prepend">
       <span class="input-group-text">Descs</span>
     </div>
     <textarea name="descs" class="form-control" aria-label="With textarea"><?=$data['descs'] ?></textarea>
   </div>
  

  <div class="input-group">
    <select name="category" class="custom-select" id="cat">
            <option value="" selected> Select You Cat</option>
                <option value="1">Laptop</option>
                <option value="2">Ecran</option>
                <option value="3">Phone</option>
                <option value="4">Cars</option>
    </select>
    <div class="input-group-append">
      <label class="input-group-text" for="cat">Category</label>
    </div>
  </div>
  <input type="hidden" name="id" value="<?=$data['id'] ?>">
<div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" name="prix" class="form-control" value="<?=$data['prix'] ?>" id="prix" >
  </div>

  <button type="submit" class="btn btn-primary btn-lg">Update</button>
</form>






 <?php include 'inc/footer.php' ?>

