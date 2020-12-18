<?php  include('configure.php'); ?>
<?php 
if (isset($_GET['searchBtn'])) {
    $bloodGroup = $GET['bloodgroup'];
    $donors = $db->searchDonorWithBloodGroup($bloodgroup);
        $record = mysqli_query($db, "SELECT * FROM donorlist WHERE bloodgroup=$bloodgroup");

        if (mysqli_num_rows($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $name = $n['name'];
            $address = $n['address'];
            $phonenumber =  $n['phonenumber'];
            $dob =  $n['dob'];
            $gender = $n['gender'];
            $bloodgroup =  $n['bloodgroup'];
        }

?>


 <!DOCTYPE html>
<html>
<head>
    <title>Blood Bank And Donor System</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <form class="form-horizontal" method="get" action="search.php">
         <div class="form-group">
             <label class="col-sm-6">Search for donor with blood group </label>
                <div class="col-sm-4">
                     <select name="blood_group" class="form-control">
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-info btn-sm" name="searchBtn" >Search</button>
                </div>
         </div>
    </form>

    <?php $results = mysqli_query($db, "SELECT * FROM donorlist where bloodgroup = $bloodgroup"); ?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Dob</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Blood Group</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['phonenumber']; ?></td>
            <td><?php echo $row['bloodgroup']; ?></td>

            <td>
                <a href="admindonarlist.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="admindonarlist.php?deldl=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>