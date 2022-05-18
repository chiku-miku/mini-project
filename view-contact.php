<?php 
    include('config.php'); 
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM contacts WHERE id ='".$_GET['id']."'";
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
                    <div class="panel-heading">view contact</div>
                    <div class="panel-body">
                        <div class="panel-group">
                        <a href = "contact-list.php" class="btn btn-info">Go Back </a><br><br>
                        <table class="table">
                            <tbody>
                                <tr>
                                        <td> Name</td>
                                        <td><?php echo $result['name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td> Email</td>
                                        <td><?php echo $result['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td><?php echo $result['mobile'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Message</td>
                                        <td><?php echo $result['message'] ?></td>
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