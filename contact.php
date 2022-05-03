<?php
    include('config.php');

    if(isset($_POST['first_name'])){
        $sql = "INSERT INTO contacts (first_name, email, mobile,message,created_at)
        VALUES ('".$_POST['first_name']."', '".$_POST['email']."', '".$_POST['mobile']."','".$_POST['message']."','".date('Y-m-d h:i:s')."')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    //    echo "<pre>";
    //     print_r($_POST);
    //     die();
    
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
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary mt-30">
                <div class="panel-heading">Contact Us</div>
                <div class="panel-body">
                    <div class="panel-group">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="first_name" placeholder="Please Enter Your Name" required> 
                            </div>

                            <div class="form-group">
                                <label for="email">Email Id</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Please Enter Your Email Id" required> 
                            </div>

                            <div class="form-group">
                                <label for="mob">Mobile No</label>
                                <input class="form-control" type="text" id="mob" name="mobile" placeholder="Please Enter Your Mobile No" required>
                            </div>

                            <div class="form-group">
                                <label for="msg">Message</label>
                                <div>
                                    <textarea class="form-control" name="message" id="msg" cols="70" rows="6" placeholder="Please Enter Your Message" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-warning">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>