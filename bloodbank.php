<?php  include('configure.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>
div {
  background-image: url('3.jpg');

}
</style>
</head>
<body>

      
    <?php $results = mysqli_query($db, "SELECT * FROM bloodbank"); ?>

 <div style="text-align: center;">
        BLOOD BANK
 </div>
<table>
    <thead>
        <tr>
            <th>Blood Group</th>
            <th>Units</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
                        <td><?php echo $row['bloodgroup']; ?></td>
                        <td><?php echo $row['units']; ?></td>
        </tr>
    <?php } ?>
</table>
<center>
 <button  onclick="document.location='index.php'" >HOME</button>
 </center>
</body>
</html>   