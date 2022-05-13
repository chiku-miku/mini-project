<?php
    include('config.php');
    if(!isset($_SESSION["id"])){
        header("Location: http://localhost/mini-project/login.php");
    }


    if(isset($_SESSION["id"])){
       $sql = "SELECT * FROM users WHERE id = '".$_SESSION["id"]."'";

        if (mysqli_query($conn, $sql)) {
            $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            // echo "<pre>";
            // print_r($result);
            // die();

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
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
        <?php 
        include('common/menu.php'); 
        ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary mt-30">
                    <div class="panel-heading">User Details</div>
                    <div class="panel-body">
                        <div class="panel-group" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="info">
                                        <td><b>First Name</b></td>
                                        <td><?php echo $result['first_name']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Middle Name</b></td>
                                        <td><?php echo $result['middle_name']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Last Name</b></td>
                                        <td><?php echo $result['last_name']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Gender</b></td>
                                        <td><?php echo $result['gender']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Date Of Birth</b></td>
                                        <td><?php echo $result['date_of_birth']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Email Id</b></td>
                                        <td><?php echo $result['email_id']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Mobile Number</b></td>
                                        <td><?php echo $result['mobile_no']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Caste</b></td>
                                        <td><?php echo $result['caste']; ?></td>
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