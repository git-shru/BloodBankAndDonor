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
	$gender = "";
	$dob = "";
	$bloodgroup = "";
	$units = "";
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phonenumber = $_POST['phonenumber'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$bloodgroup = $_POST['bloodgroup'];

		mysqli_query($db, "INSERT INTO donorlist (name, address, phonenumber, dob, gender, bloodgroup) VALUES('$name', '$address', '$phonenumber', '$dob', '$gender', '$bloodgroup')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: admindonorlist.php');

	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phonenumber = $_POST['phonenumber'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$bloodgroup = $_POST['bloodgroup'];


	mysqli_query($db, "UPDATE donorlist SET name='$name', address='$address',phonenumber=$phonenumber, dob=$dob, gender=$gender, bloodgroup=$bloodgroup  WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: admindonorlist.php');
}

	if (isset($_GET['deldl'])) {
	$id = $_GET['deldl'];
	mysqli_query($db, "DELETE FROM donorlist WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	}

	if (isset($_GET['delbb'])) {
	$id = $_GET['delbb'];
	mysqli_query($db, "DELETE FROM bloodbank WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	}
?>