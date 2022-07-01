<?php
session_start();
if($_SESSION["login"] != "true"){
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .card{
          margin: 10px;
        }
        .cardbox{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }
    </style>
</head>
<body>

<?php
    include 'navbar.php';
    include 'function.php';
?>

  <div class="cardbox" style="padding: 0 18%; margin: 100px 0 40px; ">
        
    <?php
    $query_resep = "SELECT * FROM makanan ORDER BY id DESC";
    $datas = query($query_resep);
    foreach($datas as $data){ 
    ?>

    <div class="card" style="width: 300px;height: 600px">
      <img class="card-img-top" src="../img_recipe/<?= $data["foto"] ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $data["nama_makanan"] ?></h5>
            <p class="card-text"> <?= $data["deskripsi"] ?> </p>
            <a href="#" class="btn btn-primary ajax-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-id="<?= $data["id"] ?>" >Read more</a>
        </div>
    </div>

    <?php } ?>
  </div>

<div id="container">
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="space" style="height: 50px;"></div>
  <?php
    include_once 'footer.php';
  ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script >
  
$(document).ready(function(){

$('.ajax-btn').click(function(){
  
  var cardid = $(this).data('id');

  // AJAX request
  $.ajax({
   url: '../ajax/modal.php',
   type: 'post',
   data: {cardid: cardid},
   success: function(response){ 
     // Add response in Modal body
     $('.modal-body').html(response);

     // Display Modal
     $('#staticBackdrop').modal('show'); 
   }
 });
});
});

</script>
</body>
</html>