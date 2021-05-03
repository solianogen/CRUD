<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$age = mysqli_real_escape_string($db, $_POST['age']);
	$email = mysqli_real_escape_string($db, $_POST['email']);


	$result = mysqli_query($db, "INSERT INTO users(name,age,email) VALUES ('$name','$age', '$email')");

	echo "<font color='green'>Data added successfully!";
	echo "<br/><a href='index.php'>View Result</a>";
}