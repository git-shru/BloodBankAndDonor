<?php  include('configure.php'); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" href="newstyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<input type="submit" class="fadeIn fourth" onclick="document.location='index.php'" value="HOME" >
<form  action="admincontrol.php">
<div class="wrapper fadeInDown">
  	<div id="formContent">
     <!-- Login Form -->
    		<form>
		      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
		      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
		      <input type="submit" class="fadeIn fourth" value="Log In">
    		</form>
  	</div>
</div>
</form>
</body>
</html> 