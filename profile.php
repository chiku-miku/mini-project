<!DOCTYPE html>
<html lang="en">
    <head>
        <title>user contact details</title>
        <meta charset="utf-8">    
        <?php include('common/header.php'); ?>
        <link rel="stylesheet" href="asset/picture.css">

        
    </head>
    <body class="login-body">
        <!-- Menu Start -->
        <div class="sidebar">
            <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="dashboard.php"><i class="fa fa-fw fa-envelope"></i>Go Back</a>
            <a href="user-list.php"><i class="fa fa-fw fa-wrench"></i>User List</a>
            <a href="contact-list.php"><i class="fa fa-fw fa-user"></i>Contact List</a>
            <a href="logout.php"><i class="fa fa-fw fa-user"></i>Logout</a>
        </div>
        <!-- End -->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-primary mt-30">
                        <div class="panel-heading"><?php echo $_SESSION['first_name']; ?></div>
                        <div class="panel-body">
                            <div class="panel-group" style="overflow-x:auto;">
                                <?php if(isset($_SESSION['success_message'])){?>
                                    <div class="alert alert-success">
                                        <?php echo $_SESSION['success_message'] ; ?>
                                    </div>
                                <?php } ?>
                                <form action="profile-update.php" method="post">
                                    <?php $sql = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)){
                                            // echo "<pre>";
                                            // print_r($row);
                                            // die(); ?>
                                            <div>
                                                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"> 
                                            </div>

                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input class="form-control" type="text" id="first_name" name="first_name" value = "<?php echo $row['first_name']; ?>" required> 
                                            </div>

                                            <div class="form-group">
                                                <label for="middle_name">Middle Name</label>
                                                <input class="form-control" type="text" id="middle_name" name="middle_name" value = "<?php echo $row['middle_name']; ?>" required> 
                                            </div>

                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Please Enter Your Email Id" value="<?php echo $row['last_name']; ?>" required> 
                                            </div>

                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <input class="form-control" type="text" id="gender" name="gender" value = "<?php echo $row['gender']; ?>" required> 
                                            </div>

                                            <div class="form-group">
                                                <label for="date_of_birth">Date Of Birth</label>
                                                <input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email_id">Date Of Birth</label>
                                                <input class="form-control" type="email" id="email_id" name="email_id" value="<?php echo $row['email_id']; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="mobile_no">Mobile Number</label>
                                                <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="<?php echo $row['mobile_no']; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="caste">Cate</label>
                                                <input class="form-control" type="text" id="caste" name="caste" value="<?php echo $row['caste']; ?>" required>
                                            </div>

                                            
                                            <div class="form-group">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>