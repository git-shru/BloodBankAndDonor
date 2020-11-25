<?php 

session_start();
	$db = mysqli_connect('localhost', 'root', '', 'project');

	// initialize variables
	$username = "";
	$password = "";
	$id = 0;
	$name = "";
	$address = "";
	$phonenumber = "";
	$dob = "";
	$bloodgroup = "";
	$units = "";
	$update = false;
?>