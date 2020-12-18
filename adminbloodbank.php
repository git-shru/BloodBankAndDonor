<?php  include('configure.php');  

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM bloodbank WHERE id=$id");

        if (mysqli_num_rows($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $bloodgroup =  $n['bloodgroup'];
            $units = $n['units'];
        }
    }

     if (isset($_POST['save'])) {
       
        $bloodgroup = $_POST['bloodgroup'];
        $units = $_POST['units'];

        $q1="INSERT INTO bloodbank VALUES('' ,'$bloodgroup' , '$units')";
        mysqli_query($db,$q1);
            $_SESSION['message'] = "Data saved";       
    }

    if (isset($_POST['update'])) {
         $id = $_POST['id'];
        $bloodgroup = $_POST['bloodgroup'];
        $units = $_POST['units'];

        mysqli_query($db, "UPDATE bloodbank SET  bloodgroup='$bloodgroup' , units='$units'  WHERE id=$id");
        $_SESSION['message'] = "Data updated!"; 
        }

    if (isset($_GET['delbb'])) {
    $id = $_GET['delbb'];
    mysqli_query($db, "DELETE FROM bloodbank WHERE id=$id");
    $_SESSION['message'] = "Data deleted!"; 
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
    <?php $results = mysqli_query($db, "SELECT * FROM bloodbank"); ?>
<button  onclick="document.location='admincontrol.php'" >BACK</button>
<table>
    <thead>
        <tr>
            
            <th>Blood Group</th>
            <th >Units</th>
            <th colspan="2">Action</th>
        </tr>
    </thead> 

 <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['bloodgroup']; ?></td>
            <td><?php echo $row['units']; ?></td>

            <td>
                <a href="adminbloodbank.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>

            <td>
                <a href="adminbloodbank.php?delbb=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>


    <form method="post" action="adminbloodbank.php" >
        <div class="input-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Bloodgroup</label>
            <input type="text" name="bloodgroup" value="<?php echo $bloodgroup; ?>">
        </div>
        <div class="input-group">
            <label>Units</label>
            <input type="text" name="units" value="<?php echo $units; ?>">
        </div>
        <div class="input-group">
            <?php if ($update == true): ?>
    <input  class="btn" type="submit" name="update" value= "UPDATE" style="background: #556B2F;" >
    <?php else: ?>
    <input  class="btn" type="submit" name="save" value= "SAVE" >
<?php endif ?>
        </div>
    </form>
</body>
</html>   