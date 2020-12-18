<?php  include('configure.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
div {
  background-image: url('5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  
}

.bs-example{
        margin: 20px;
    }

</style>
</head>
<body>

    <?php $results = mysqli_query($db, "SELECT * FROM donorlist"); ?>

 <div>
        <pre>




<h5> DONOR LIST</h5>




        </pre>
    </div>
    <div class="bs-example">
<table class="table table-striped">
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
</div>
<center>
 <input type="submit" onclick="document.location='index.php'" value="HOME"> </button>
 </center>
</body>
</html>   