<?php
  require 'function.php';
  if(isset($_POST["submit"])){
    if(regist($_POST)){
      header("Location: index.php");
      exit;
    } else {
      ECHO "<script>alert('User terdaftar, gunakan email lain!')</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
            display: flex;
            justify-content : center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


<form style="width: 300px;" action="" method="post">
  
  <h1 class="font-weight-bold mb-5 text-center"> Register </h1>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" class="form-control" name="email" required />
    <label class="form-label" for="email">Email address</label>
  </div>  

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" class="form-control" name="password" required />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- Password Confirm input -->
  <div class="form-outline mb-4">
    <input type="password" id="password2" class="form-control" />
    <label class="form-label" for="password2">Confirm Password</label>
  </div>

  <!-- Submit button -->
  <div class="text-center">
    <button type="submit" name="submit" id="submit-btn" class="btn btn-primary btn-block mb-4 text-center">Create</button>
  </div>

  <!-- Register buttons -->
  <div class="text-center">
    <p>I already have account <a href="index.php">Sign in</a></p>
  </div>
</form>

<script>
        var pw1  = document.getElementById("password");  
        var pw2  = document.getElementById("password2"); 
        document.addEventListener('keyup', logKey);
        
        function logKey(){
            if(pw2.value != pw1.value && pw2.value != ""){
                console.log("x")
                pw2.classList.add("is-invalid");
                document.getElementById("submit-btn").disabled = true;
            } else {
                console.log("y")
                pw2.classList.remove("is-invalid");
                document.getElementById("submit-btn").disabled = false;
            }
        }
</script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>