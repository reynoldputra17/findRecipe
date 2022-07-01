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
    <title>Buat Resep</title>
    <style>
       
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<?php
    include_once 'navbar.php';
?>

<div class="container" style="padding: 0 10%; width: 100%; margin-top: 100px; margin-bottom: 100px;">
<!-- form judul dan desc -->

    <h1>Buat Resep</h1>
    <?php
        require_once 'recipe_handling.php';
        //var_dump($_POST);
        //var_dump($_FILES);
    ?>

<form action="" method="post" id="form1" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama makanan</label>
        <input type="text" class="form-control" id="nama" name="nama_makanan">
    </div>

    <div class="form-group">
    <label for="floatingTextarea">Deskripsi</label>
        <textarea class="form-control" placeholder="Leave a desc here" id="floatingTextarea" name="desc"></textarea>
    </div>

    <input type="text" name="form1" value="true" hidden>


<!-- form bahan -->
    <div class="box">
	<div class="row">
        <div class="control-group" id="fields" >
            <label class="control-label" for="field1">Bahan</label>
            <div class="controls"> 
                <div role="form" autocomplete="off" id="form2">
                    <div class="entry input-group col-xs-3 mb-1">
                        <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button" style="width:40px; height:40px;">
                                <span class="glyphicon glyphicon-plus">+</span>
                            </button>
                        </span>
                    </div>
                    <input type="text" name="form2" value="true" hidden>
                </div>
            <br>
            </div>
        </div>
	</div>
    </div>

<!-- form langkah masak -->
    <div class="box">
	<div class="row pl-0">
        <div class="control-group" id="fields2">
            <label class="control-label" for="field2">Langkah masak</label>
            <div class="controls2"> 
                <div role="form" autocomplete="off" id="form3">
                    <div class="entry2 input-group col-xs-3 mb-1">
                        <input class="form-control" name="fields2[]" type="text" placeholder="Type something" />
                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add2" type="button" style="width:40px; height:40px;">
                                <span class="glyphicon glyphicon-plus">+</span>
                            </button>
                        </span>
                    </div>
                    <input type="text" name="form3" value="true" hidden>
                </div>
            <br>
            </div>
        </div>
	</div>
    </div>


    <div class="mb-3">
        <label for="formFileSm" class="form-label">Upload foto makanan (.jpg)</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="img_makanan">
    </div>


    <button class="submit-multi-form btn btn-primary" name="submit" value="true">Submit</button>

    
</form>

<?php
    include_once 'footer.php';
?>

<script>



$(function()
{
    $(document).on('click', '.btn-add2', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls2 #form3:first'),
            currentEntry = $(this).parents('.entry2:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry2:not(:last) .btn-add2')
            .removeClass('btn-add2').addClass('btn-remove2')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus">-</span>');
    }).on('click', '.btn-remove2', function(e)
    {
		$(this).parents('.entry2:first').remove();

		e.preventDefault();
		return false;
	});
});

$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls #form2:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus">-</span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});

</script>
</body>
</html>