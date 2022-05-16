<?php
    include('config.php');

    if(isset($_GET['id'])){
        $sql = "SELECT * FROM contacts WHERE id ='".$_GET['id']."'";
        if (mysqli_query($conn, $sql)) {
            $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
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
                        <form action="update-contact.php" method="post">
                            <div>
                                <input type = "hidden" id = "id" name = "id" value = "<?php echo $result['id']; ?>" required> 
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Please Enter Your Name" value = "<?php echo $result['name']; ?>" required> 
                            </div>

                            <div class="form-group">
                                <label for="email">Email Id</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Please Enter Your Email Id" value = "<?php echo $result['email']; ?>"required> 
                            </div>

                            <div class="form-group">
                                <label for="mob">Mobile No</label>
                                <input class="form-control" type="text" id="mob" name="mobile" placeholder="Please Enter Your Mobile No" value = "<?php echo $result['mobile']; ?>"  required>
                            </div>

                            <div class="form-group">
                                <label for="msg">Message</label>
                                <div>
                                    <textarea class="form-control" name="message" id="message" cols="70" rows="6" placeholder="Please Enter Your Message"required><?php echo $result['message'];?></textarea>
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

