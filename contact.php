<?php
    include('config.php');
    if(isset($_POST['name'])){
        // echo "<pre>";
        // print_r($_POST);
        // die();

        $sql = "INSERT INTO contacts (name, email, mobile, message, created_at) 
        VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['message']."','".date('Y-m-d h:i:s')."')" ;

        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary mt-30">
                    <div class="panel-heading">Contact Us</div>
                    <div class="panel-body">
                        <div class="panel-group">
                            <!-- <div class="alert alert-success">
                                <strong>Success!</strong> Indicates a successful or positive action.
                            </div> -->

                            <!-- <div class="alert alert-danger">
                                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                            </div> -->
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Please Enter Your Name" required> 
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Please Enter Your Email Id" required> 
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile No</label>
                                    <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Please Enter Your Mobile No" required>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <div>
                                        <textarea class="form-control" name="message" id="message" cols="70" rows="6" placeholder="Please Enter Your Message" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.    
            </p>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.    
            </p>
        </div>
    </div>
    <!-- Menu Start -->
    <?php include('common/footer.php'); ?>
    <!-- End -->
</body>
</html>