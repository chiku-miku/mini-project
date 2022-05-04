<?php 
    include('config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">    
    <?php include('common/header.php'); ?>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body class="login-body">
    <!-- Menu Start -->
        <?php include('common/menu.php'); ?>
    <!-- End -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-primary mt-30">
                    <div class="panel-heading">User List</div>
                    <div class="panel-body">
                        <div class="panel-group">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>    
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM users";
                                        $result = mysqli_query($conn, $sql);                                                                     
                                        if(mysqli_num_rows($result) > 0){
                                            $i = 1;   
                                            while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                                <tr class="info">
                                                    <td>
                                                        <?= $i; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['first_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['middle_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['last_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['email_id']; ?>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-info">Edit</a>&nbsp;&nbsp;
                                                        <a href="#" class="btn btn-primary">Update</a>&nbsp;&nbsp;
                                                        <a href="<?php echo "delete.php?id=" .$row ['id']; ?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                    <?php
                                                $i++;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Start -->
    <?php include('common/footer.php'); ?>
    <!-- End -->
</body>
</html>