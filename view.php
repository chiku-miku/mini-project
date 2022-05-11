<?php
    include('config.php');
    if(isset($_GET['id'])){
       $sql = "SELECT * FROM contacts WHERE id = '".$_GET['id']."'";

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
        <?php include('common/menu.php'); ?>
    <!-- End -->
    
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
                                        <td><b>Name</b></td>
                                        <td><?php echo $result['name']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Email Id</b></td>
                                        <td><?php echo $result['email']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Mobile Number</b></td>
                                        <td><?php echo $result['mobile']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <td><b>Message</b></td>
                                        <td><?php echo $result['message']; ?></td>
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