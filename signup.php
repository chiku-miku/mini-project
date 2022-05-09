<?php
    include('config.php');
    if(isset($_POST['first_name'])){
        // echo "<pre>";
        // print_r($_POST);
        // die();

        $sql = "INSERT INTO users (first_name, middle_name, last_name, password, gender, date_of_birth, email_id, mobile_no, caste, created_at) 
        VALUES ('".$_POST['first_name']."', '".$_POST['middle_name']."', '".$_POST['last_name']."', md5('".$_POST['password']."'),  '".$_POST['gender']."', '".$_POST['date_of_birth']."', '".$_POST['email_id']."', '".$_POST['mobile_no']."', '".$_POST['caste']."', '".date('Y-m-d h:i:s')."')" ;

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
                    <div class="panel-heading">Signup Here</div>
                    <div class="panel-body">
                        <div class="panel-group">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Please Enter Your First Name" required> 
                                </div>

								<div class="form-group">
                                    <label for="middle_name">Middle Name</label>
                                    <input class="form-control" type="text" id="middle_name" name="middle_name" placeholder="Please Enter Middle First Name" required> 
                                </div>

								<div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Please Enter Last First Name" required> 
                                </div>

                                
								<div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Please Enter Your Password" required> 
                                </div>

								<div class="form-group">
		 							<label for="gender"> Gender : </label> 
			 						<input type="radio" id="male" name="gender" value="male" required>
		 							<label for = "male">Male</label>

			    					<input type="radio" id="female" name="gender" value="female" required> 
			    					<label for = "female">Female</label>	
								</div>

								<div class="form-group">
									<label for="date_of_birth"> Date of Birth : </label>
									<div class="form-group">
										<input type="Date" name="date_of_birth" id= "date_of_birth" required><br><br>
									</div>
								</div>

                                <div class="form-group">
                                    <label for="email_id">Email Id</label>
                                    <input class="form-control" type="email" id="email_id" name="email_id" placeholder="Please Enter Your Email Id" required> 
                                </div>

                                <div class="form-group">
                                    <label for="mobile_no">Mobile No</label>
                                    <input class="form-control" type="text" id="mobile_no" name="mobile_no" placeholder="Please Enter Your Mobile No" required>
                                </div>

								<div class="form-group">
									<label for="caste"> Caste :</label>
									<select name="caste" id="caste">
									<option selected disabled>Select Your Caste</option>
									<option value="OPEN">OPEN</option>
									<option value="OBC">OBC</option>
									<option value="SC">SC</option>
									<option value="SBC">SBC</option>
									<option value="ST">ST</option>
									<option value="NT">NT</option>
									</select>
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
    </div>
    <!-- Menu Start -->
    <?php include('common/footer.php'); ?>
    <!-- End -->
</body>
</html>




