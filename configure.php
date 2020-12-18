<?php 

session_start();
	$db = mysqli_connect('localhost', 'root', '', 'project');
	mysqli_select_db($db,'project') or die("could not select database");

	// initialize variables
	$username = "";
	$password = "";
	$id = 0;
	$name = "";
	$address = "";
	$phonenumber = "";
	$gender = "";
	$dob = "";
	$bloodgroup = "";
	$units = "";
	$update = false;
?>