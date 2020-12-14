<?php  include('configure.php'); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button  onclick="document.location='index.php'" >HOME</button>
<form  action="admincontrol.php" ><hr>
<center>
	<div class="input-group">
            Name : <input type="text" name="username" value="<?php echo $username; ?>" required><br>
            Password: <input type="password" password="password" value="<?php echo $password; ?>" required>
            <br>
            <button>LOG IN</button>
			<br><br><br>
	</div>
</form>
</body>
</html> 