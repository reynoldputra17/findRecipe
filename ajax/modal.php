<?php

require '../public/function.php';

$id_makanan = $_POST["cardid"];

//query resep
$query_resep = "SELECT * FROM makanan WHERE id = '$id_makanan'";
$data = query($query_resep);
$data = $data[0];

//query bahan
$query_bahan = "SELECT * FROM bahan WHERE id_makanan='$id_makanan'";
$bahans = query($query_bahan);

//query cara
$query_cara = "SELECT * FROM cara WHERE id_makanan='$id_makanan'";
$caras = query($query_cara);

?>

        <?php
        
            ECHO '<h4>'.$data["nama_makanan"].'</h4>';
            ECHO '<img class="card-img-top" src="../img_recipe/'.$data["foto"].'">';
            ECHO '<p'.$data["deskripsi"].'</p>';
            ECHO '<h5>Bahan :</h5>';
            ECHO '<ul>';
            foreach($bahans as $bahan){
              ECHO '<li>'.$bahan["bahan"].'</li>';
            }
            ECHO '</ul>';
            ECHO '<h5>Langkah Masak :</h5>';
            ECHO '<ul>';
            foreach($caras as $cara){
              ECHO '<li>'.$cara["cara"].'</li>';
            }
            ECHO '</ul>';
            exit;
        ?>


 