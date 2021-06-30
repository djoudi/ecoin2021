
   <?php 

   include "inc/header.php";
require 'inc/config.php';
require 'inc/functions.php';
$ecoin['nom'] = (isset($_POST['nom']))?$_POST['nom']:NULL;
$send= (isset($_POST['go']))?$_POST['go']:NULL;

if ($send=='ok') {
  $is_ok = addCat($ecoin);
  echo $is_ok;
  //exit();
 header("Location:ListCat.php");
  
}



    ?>

   <form method="post" action="">
     <div class="form-group">
       <label for="nom">Nom</label>
       <input type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp" >
     </div>

        <input type="hidden" name="go" value="ok">
    
     <button type="submit" class="btn btn-primary btn-lg">Add Category</button>
   </form>
<?php 


   include "inc/footer.php";
 ?>