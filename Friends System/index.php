<?php
require 'includes/init.php';
// IF USER MAKING LOGIN REQUEST
if(isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->loginUser($_POST['email'],$_POST['password']);
}
// IF USER ALREADY LOGGED IN
if(isset($_SESSION['email'])){
  header('Location: profile.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
  <div class="background">
    <div class="container">
	<h1>LINKER!</h1>
  <div class="main_container login_signup_container">
    <h2>Login</h2>

    <form action="" method="POST" class="input-group">
      <label for="email">Email</label>
      <input class = "input-field" type="email" id="email" name="email" spellcheck="false" placeholder="Enter your email address" required>
      <br>
      <label for="password">Password</label>
      <input class = "input-field" type="password" id="password" name="password" placeholder="Enter your password" required>
      <input class="Input" type="submit" value="Login">
      <a class="Input" href="signup.php" class="form_link">Sign Up</a>
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
    </form>
    </div>
    </div>
    
  </div>
</body>
</html>