<?php
/*
(c) Copyright 2021, All Rights Reserved. Licensed under by Edge Programming
Created this file on Sunday, January 17, 2021 & Written by Muhammad Farizi
QuavoSS - Simple Security, version 1.00
*/

// Display Errors for PHP :
#ini_set('display_errors', 1); // ==> If you want to active this display errors in your PHP, uncomment (#) symbol

// Call JSON's database file (full path file) :
$file = "database.json";

// Get json's file :
$getJson = file_get_contents($file);

// Decoded "database.json" :
$data = json_decode($getJson, true);

// Read array data with foreach :
foreach ($data as $f) {
	$questSS = $f["Question"];
	$answerSS = $f["Answer"];
}

if (isset($_POST["Submit"])){

	if ($_POST["ss"] == $answerSS){
		$msg="<script>alert('Your answer is correctly !'); window.location='security_home.php';</script>";
	} elseif($_POST["ss"] == ""){
		$msg="<i class='bi bi-exclamation-triangle-fill'></i>&nbsp; Your answer is still empty !";
	} else {
		$msg="<i class='bi bi-exclamation-triangle-fill'></i>&nbsp; Your answer is wrong !";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>QuavoSS - Simple Security</title>
	
	<!-- Bootstrap : -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>

	<br>

	<div class="text-center">
		<h2><i class="bi bi-lock text-warning"></i>&nbsp; QuavoSS - Simple Security</h2>
		<p>version 1.00</p>	
	</div>

	<hr>

	<form method="post" action="">
		<div align="center">
			<?php if(isset($_POST["Submit"])){ ?>
			<div class="alert alert-danger" role="danger">
			 	<?php echo $msg; ?>
			</div>
			<?php } ?>
			<h3><?php echo $questSS; ?></h3>
			<input type="text" name="ss" size="35" autocomplete="off" autofocus value="" placeholder="Type for this simple security & login it!"> &nbsp;&nbsp; <button class="btn btn-success" name="Submit" type="submit"><i class="bi bi-box-arrow-in-right"></i>&nbsp; Login!</button>
		</div>
	</form>

	<hr>

	<center>
		<address>&copy; Copyright 2021, All Rights Reserved. <br> <i>:: Created & Written by <b>Farizi</b> ::</i></address>
	</center>

</body>
</html>