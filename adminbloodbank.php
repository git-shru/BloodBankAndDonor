<?php  include('configure.php'); ?>
<?php 
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM donorlist WHERE id=$id");

        if (mysqli_num_rows($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $bloodgroup =  $n['bloodgroup'];
            $units = $n['units'];
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
            
            <th>Blood Group</th>
            <th >Units</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

   
</table>

<form>
    <form method="post" action="configure.php" >
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
    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
    <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
        </div>
    </form>
</body>
</html>   