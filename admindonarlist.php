<?php  include('configure.php'); ?>
<?php 
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM donorlist WHERE id=$id");

        if (mysqli_num_rows($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $name = $n['name'];
            $address = $n['address'];
            $phonenumber =  $n['phonenumber'];
            $dob =  $n['dob'];
            $bloodgroup =  $n['bloodgroup'];
        }
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
    <?php $results = mysqli_query($db, "SELECT * FROM donorlist"); ?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Dob</th>
            <th>contact</th>
            <th>Blood Group</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['phonenumber']; ?></td>
            <td><?php echo $row['bloodgroup']; ?></td>

            <td>
                <a href="configure.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="configure.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

<form>
    <form method="post" action="configure.php" >
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
            <input type="text" name="dob" value="<?php echo $dob; ?>">
        </div>
        <div class="input-group">
            <label>Contact</label>
            <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>">
        </div>
        <div class="input-group">
            <label>Bloodgroup</label>
            <input type="text" name="bloodgroup" value="<?php echo $bloodgroup; ?>">
        </div>
        <div class="input-group">
            <?php if ($update == true): ?>
    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
    <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
        </div>
    </form>
</body>
</html>   