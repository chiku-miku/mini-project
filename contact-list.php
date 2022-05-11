<?php 
    include('config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>user contact details</title>
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
                        <div class="panel-group" style="overflow-x:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>    
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM contacts ORDER BY id DESC";
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
                                                        <?php echo $row['name']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row['email']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row['mobile']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row['message']; ?>
                                                    </td>
                                                    <td width = "250px">
                                                        <a href="<?php echo "edit-contact.php?id=".$row['id']; ?>" class="btn btn-info">Edit</a>&nbsp;&nbsp;
                                                        <a href="<?php echo "view.php?id=".$row['id']; ?>" class="btn btn-primary">View</a>&nbsp;&nbsp;
                                                        <a href="<?php echo "delete-contact.php?id=".$row['id']; ?>" class="btn btn-danger">Delete</a>
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

