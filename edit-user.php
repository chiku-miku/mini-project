<?php
    include('config.php');
    if(isset($_SESSION['id'])){
        // echo "<pre>";
        // print_r($_SESSION['id']);
        // die();
        $sql = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
        // echo "<pre>";
        // print_r($_SESSION['id']);
        // die();
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
                    <div class="panel-heading">Edit Profile</div>
                    <div class="panel-body">
                        <div class="panel-group">
                            <?php if(isset($_SESSION['success_message'])){?>
                                <div class="alert alert-success">
                                    <?php echo $_SESSION['success_message'] ; ?>
                                </div>
                            <?php } ?>
                            <!-- <div class="alert alert-success">
                                <strong>Success!</strong> Indicates a successful or positive action.
                            </div> -->

                            <!-- <div class="alert alert-danger">
                                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                            </div> -->
                            <form action="update-user.php" method="post">
                                <div>
                                    <input type="hidden" id="id" name="id" value="<?php echo $result['id']; ?>"> 
                                </div>

                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input class="form-control" type="text" id="first_name" name="first_name" value = "<?php echo $result['first_name']; ?>" required> 
                                </div>

                                <div class="form-group">
                                    <label for="middle_name">Middle Name</label>
                                    <input class="form-control" type="text" id="middle_name" name="middle_name" value = "<?php echo $result['middle_name']; ?>" required> 
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Please Enter Your Email Id" value="<?php echo $result['last_name']; ?>" required> 
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input class="form-control" type="text" id="gender" name="gender" value = "<?php echo $result['gender']; ?>" required> 
                                </div>

                                <div class="form-group">
                                    <label for="date_of_birth">Date Of Birth</label>
                                    <input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $result['date_of_birth']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="email_id">Email Id</label>
                                    <input class="form-control" type="email" id="email_id" name="email_id" value="<?php echo $result['email_id']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="mobile_no">Mobile Number</label>
                                    <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="<?php echo $result['mobile_no']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="caste">Caste</label>
                                    <input class="form-control" type="text" id="caste" name="caste" value="<?php echo $result['caste']; ?>" required>
                                </div>

                                
                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  
</body>
</html>