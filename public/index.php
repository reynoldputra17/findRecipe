<?php
  require 'function.php';
  
  if(isset($_POST["submit"])){
    if(login($_POST) > 0){
      session_start();
      $_SESSION["login"] = true;
      header("Location: home.php");
      exit;
    } else {
      ECHO "<script>alert('User atau password salah!')</script>";
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


<form style="width: 300px;" method="post" action="">
  
  <h1 class="font-weight-bold mb-5 text-center"> Login </h1>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>  

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>


  <!-- Submit button -->
  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block mb-4 text-center" name="submit">Sign in</button>
  </div>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="regist.php">Register</a></p>
  </div>
</form>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>