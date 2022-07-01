<?php

require 'function.php';

if(isset($_POST["submit"]) && $_POST["submit"] == "true"){

//uploaded file validation
if(isset($_FILES)){
    $file_name = explode(".", $_FILES["img_makanan"]["name"]);
    if(end($file_name) != "jpg"){
        ECHO "<script> alert(File harus menggunakan format jpg) </script>"; 
        exit;
    }
}

//input form resep dan desc to database
    $nama_makanan = $_POST["nama_makanan"];
    $desc = $_POST["desc"];

    //insert to tabel resep
    $query = "INSERT INTO makanan VALUE ('', '$nama_makanan', '$desc', '')";
    mysqli_query($conn, $query);

    //find resep_id
    $query2 = "SELECT LAST_INSERT_ID();"; 
    $result = query($query2);
    $last_id = $result[0]["LAST_INSERT_ID()"];

//input form bahan to database
    $bahans = $_POST["fields"];
    foreach($bahans as $bahan){
        $query3 = "INSERT INTO bahan VALUE ('', '$last_id', '$bahan')";
        mysqli_query($conn, $query3);
    }

//input form cara to database
    $caras = $_POST["fields2"];
    foreach($caras as $cara){
        $query4 = "INSERT INTO cara VALUE ('', '$last_id', '$cara')";
        mysqli_query($conn, $query4);
    }

//input file photo name
    $new_name = $last_id.".jpg";
    $tmpName = $_FILES["img_makanan"]["tmp_name"];
    move_uploaded_file($tmpName, '../img_recipe/'.$new_name);
    $query5 = "UPDATE makanan SET foto='$new_name' WHERE id='$last_id'";
    mysqli_query($conn, $query5);
}
