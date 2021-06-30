<?php 
require 'inc/config.php';

$sql ="SELECT * FROM products";


  $q = mysqli_query($connect,$sql) or die(mysqli_errno($q));

  $data = mysqli_fetch_all($q,MYSQLI_ASSOC);


 ?>

<table  border="2">
    <tr>
        <td>Nom</td>
        <td>Desc</td>
        <td>Cat</td>
        <td>Prix</td>
    </tr>
<?php 
 foreach ($data as  $value):
 ?>
    <tr>
        <td><?=$value['nom'] ?></td>
        <td><?=$value['descs'] ?></td>
        <td><?=$value['category'] ?></td>
        <td><?=$value['prix'] ?></td>
    </tr>

    <?php endforeach; ?>
</table>



