<?php
    include('config.php');
    if(isset($_POST['id'])){
        // echo "<pre>";
        // print_r($_POST['id']);
        // die();

        $sql = "UPDATE users SET first_name = '".$_POST['first_name']."', last_name = '".$_POST['last_name']."', date_of_birth = '".$_POST['date_of_birth']."', mobile_no = '".$_POST['mobile_no']."' WHERE id = '".$_POST['id']."'";

        if (mysqli_query($conn, $sql)) {
            
          $success_message = 'record updated successfully'; 
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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary mt-30">
                    <div class="panel-heading"><?php echo $_SESSION['first_name']; ?></div>
                    <div class="panel-body">
                        <div class="panel-group" style="overflow-x:auto;">

                            <?php if(isset($success_message)) {?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $success_message ; ?>
                                </div>
                    
                                <?php $sql = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
                                    $result = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)){

                                            // echo "<pre>";
                                            // print_r($row);
                                            // die(); ?>
                                            <form action="" method="post">
                                                <div>
                                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="first_name">First Name</label>
                                                    <input class="form-control" type="text" id="first_name" name="first_name" value = "<?php echo $row['first_name']; ?>" required> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Please Enter Your Email Id" value="<?php echo $row['last_name']; ?>" required> 
                                                </div>

                                                <div class="form-group">
                                                    <label for="date_of_birth">Date Of Birth</label>
                                                    <input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="mobile_no">Mobile Number</label>
                                                    <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="<?php echo $row['mobile_no']; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <div class="">
                                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form> <?php
                                        }
                                    }
                            } ?>
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