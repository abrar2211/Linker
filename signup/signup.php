<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Linker-Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
<div class="Background">

 
 <div class="Box"> 
 	
		
	<div class="container Signup">

		
	 
	 
	 <form class="My_Form" action="signup.php" method="POST" >
	 <?php include('errors.php');?>

	 	<span class="Signup">
	 		<h1 >Sign Up</h1>
	 	</span>
	   
	 	<div class="form-group">
	 		<label>Full Name</label>
	 		<input value="<?php echo $FullName ?>" type="text" name="Full Name" placeholder=" Full Name">
	 	</div>

	 	<div class="form-group">
	 		<label>Email</label>
	 		<input value="<?php echo $Email ?>" type="text" name="Email" placeholder=" Email">
	 	</div>

	 	<div class="form-group">
	 		<label>Username</label>
	 		<input value="<?php echo $Username?>" type="text" name="Username" placeholder=" Username">
	 	</div>

	 	<div class="form-group">
	 		<label>Password</label>
	 		<input type="text" name="Password" placeholder=" *************">
	 	</div>

	 	<div class="form-group">
	 		<label>Repeat</label>
	 		<input type="text" name="Repeat Password" placeholder=" *************">
	 	</div>
	 	<input class="button" type="submit" value="Submit" name="Submit">

	 	<div class="Terms">
						<div class="checkbox">
							<input class="checkbox" id="checkbox1" type="checkbox" name="CB">
						
								<span class="text1">
									
									I agree to the


									<a href="#" class="text1">
										Terms of User.
										
									</a>
 						
								</span>
							</div>
		</div>

				<span class="text2"> <br>

									Already have an account?
									<a href="#" onclick ="toggleform()" class="text2">
										Sign in Now!
									</a>
		</span>	
							</label>
						

						
					
	   </div>




	 </form>

	</div>

	 <!--<form class="My_Form2" >

	 	<span class="SignIn">
	 		<h2 >Sign In</h2>
	 	</span>
	  

	 	<div class="form-group2">
	 		<label>Email</label>
	 		<input type="text" name="Email" placeholder=" Email">
	 	</div>


	 	<div class="form-group2">
	 		<label>Password  </label>
	 		<input type="text" name="Password" placeholder=" *************">
	 	</div>
 
	 	<p> <br> </p>
	 	
	 	<input class="button" type="submit" value="Login" name="Login">
	 	<p> <br> </p>

	 	<input type="checkbox" class = "checkbox"><span> Remember Password <br> </span>

	 	<div class="Terms2">
						
								<span class="text3">
									<br>
									Don't have an account?
									<a href="#" onclick ="toggleform()" class="text3"
										Sign Up Now!
									</a>
		</span>
							</label>
						</div>

						
					</div>
	   </div>



	 </form>

	-->

		

</div>
</body>
   <script type="text/javascript">
   	function  {
   		var container = document.querySelector('.Box') ;
   		container.classList.toggle('active')
   	}
   </script>

