<?php

    $FullName = "";
	$Username = "";
	$Email = "";

	$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'linker_db');

//if the sobmit button is clicked
if (isset($_POST['Submit'])) {
	# code...
	$FullName = mysql_real_escape_string($_POST['FullName']);
	$Username = mysql_real_escape_string($_POST['Username']);
	$Email = mysql_real_escape_string($_POST['Email']);
	$Password = mysql_real_escape_string($_POST['Password']);
	$Repeat = mysql_real_escape_string($_POST['Repeat']);

	// ensure that the fields are filled properly

	if (empty($FullName)) {
		# code...
		array_push($errors, "FullName is required");

	}

	if (empty($Username)) {
		# code...
		array_push($errors, "Username is required");

	}

	if (empty($Email)) {
		# code...
		array_push($errors, "Email is required");

	}

	if (empty($Password)) {
		# code...
		array_push($errors, "Password is required");

	}

	if ($Password != $Repeat) {
		# code...
		array_push($errors, "The two passwords did not match");

	}

	//if there are no errors save user to database
	if (count($errors)==0) {
		# code...

		$Password = md5($Password);
		$sql = "INSERT INTO user(FullName, Username, Email, Password)
		        VALUES('$FullName, '$Username', '$Email' '$Password')";

		        mysqli_query($db, $sql);

	}


}