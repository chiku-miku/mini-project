<?php 
    include('config.php'); 
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM users WHERE id ='".$_GET['id']."'";
        if(mysqli_query($conn , $sql)) {
            $result = mysqli_fetch_assoc(mysqli_query($conn , $sql));
            //  echo "<pre>";
            //  print_r($result);
            //  die();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
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
                    <div class="panel-heading">View User</div>
                    <div class="panel-body">
                        <div class="panel-group">
                            <a href = "user-list.php" class="btn btn-info">Go Back </a><br><br>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td><?php echo $result['first_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Middle Name</td>
                                        <td><?php echo $result['middle_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><?php echo $result['last_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo $result['gender'] ?></td>
                                    </tr> 
                                    <tr>
                                        <td>Date Of Birth</td>
                                        <td><?php echo $result['date_of_birth'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email Id</td>
                                        <td><?php echo $result['email_id'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile No</td>
                                        <td><?php echo $result['mobile_no'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Caste</td>
                                        <td><?php echo $result['caste'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Created At</td>
                                        <td><?php echo $result['created_at'] ?></td>
                                    </tr>
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