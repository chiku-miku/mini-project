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
                                    <label for="fname">First Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname" placeholder="Please Enter Your First Name"> 
                                </div>

								<div class="form-group">
                                    <label for="mname">Middle Name</label>
                                    <input class="form-control" type="text" id="mname" name="mname" placeholder="Please Enter Middle First Name"> 
                                </div>

								<div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Please Enter Last First Name"> 
                                </div>

								<div class="form-group">
		 							<label for="gender"> Gender : </label> 
			 						<input type="radio" id="male" name="gender" value="male">
		 							<label for = "male">Male</label>

			    					<input type="radio" id="female" name="gender" value="female"> 
			    					<label for = "female">Female</label>	
								</div>

								<div class="form-group">
									<label for="dob"> Date of Birth : </label>
									<div class="form-group">
										<input type="Date" name="dob" id= "dob" ><br><br>
									</div>
								</div>

                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Please Enter Your Email Id"> 
                                </div>

                                <div class="form-group">
                                    <label for="mob">Mobile No</label>
                                    <input class="form-control" type="text" id="mob" name="mob" placeholder="Please Enter Your Mobile No">
                                </div>

								<div class="form-group">
									<label for="Caste"> Caste :</label>
									<select name="Caste" id="Caste">
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




