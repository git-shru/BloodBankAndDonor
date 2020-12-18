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
        .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>

      
    <?php $results = mysqli_query($db, "SELECT * FROM bloodbank"); ?>
 <pre>
 <div style="text-align: center; color: brown; font-style: italic;">
       <h3> BLOOD BANK <h3>
 </div>
</pre>
 <center>
  <div class="bs-example">
<table class="table table-striped">
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
</div>
<center>
 <input type="submit" class="fadeIn first" onclick="document.location='index.php'" value=" HOME">
 </center>
</body>
</html>   