<?php  include('configure.php'); 
 
     if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];

        $q1="INSERT INTO donatenow VALUES('' ,'$name', '$address', '$phonenumber', '$dob', '$bloodgroup', '$gender')";
        mysqli_query($db,$q1);
            $_SESSION['message'] = "Please vist our centre with id proof..Thank you!!";       
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>

    <button  onclick="document.location='index.php'" >BACK</button>

<form method="post" action="donatenow.php" >
        
        <div class="input-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="input-group">
            <label>DOB</label>
            <input type="date" name="dob" value="<?php echo $dob; ?>">
        </div>
        <div class="input-group">
            <label>Contact</label>
            <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>">
        </div>
         <div class="input-group">
            <label>Gender</label>
            <input type="text" name="gender" value="<?php echo $gender; ?>">
        </div>
        <div class="input-group">
            <label>Bloodgroup</label>
            <input type="text" name="bloodgroup" value="<?php echo $bloodgroup; ?>">
        </div>
        <div class="input-group">
            <input type="submit" name="save" value="SAVE" >
        </div>
    </form>
</body>
</html>   