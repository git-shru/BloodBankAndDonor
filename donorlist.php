<?php  include('configure.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>
div {
  background-image: url('5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  
}
</style>
</head>
<body>

    <?php $results = mysqli_query($db, "SELECT * FROM donorlist"); ?>

 <div>
        <pre>




 DONOR LIST




        </pre>
    </div>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Dob</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Blood Group</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['dob']; ?></td>

            <td><?php echo $row['phonenumber']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['bloodgroup']; ?></td>
        </tr>
    <?php } ?>
</table>
<center>
 <button  onclick="document.location='index.php'" >HOME</button>
 </center>
</body>
</html>   