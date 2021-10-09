<?php
require 'includes/init.php';

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->singUpUser($_POST['username'],$_POST['email'],$_POST['password']);
}

if(isset($_SESSION['email'])){
  header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./signup.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
  <div class="background">
	<div class="container">
  <div class="main_container login_signup_container">
    <h1>LINKER!</h1>
    <h2>Sign Up</h2>
    <form action="" method="POST" novalidate class="input-group">
      <label for="username">Full Name</label>
      <input class = "input-field" type="text" id="username" name="username" spellcheck="false" placeholder="Enter your full name" required>
      <label for="email">Email</label>
      <input class = "input-field" type="email" id="email" name="email" spellcheck="false" placeholder="Enter your email address" required>
      <label for="password">Password</label>
      <input class = "input-field" type="password" id="password" name="password" placeholder="Enter your password" required>
      <input class="Input" type="submit" value="Sign Up">
      <a class="Input" href="index.php" class="form_link"> Login</a>
    </form>
    <div>  
      <?php
        if(isset($result['errorMessage'])){
          echo '<p class="errorMsg">'.$result['errorMessage'].'</p>';
        }
        if(isset($result['successMessage'])){
          echo '<p class="successMsg">'.$result['successMessage'].'</p>';
        }
      ?>    
    </div>
    </div>
    </div>
  </div>
</body>
</html>

