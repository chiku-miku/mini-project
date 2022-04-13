<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
		
</style>
<body>
	<h3>Registration Form :</h3> 
	<div class="container">		
		<form class="form-horizontal" method="post" action="/action_page.php">
			<div class="form-group">
			  	<label class="control-label col-sm-2" for="fname"> Name : </label>
				  	<div class="col-sm-6">
				  		<input class="form-control" type="text" id="fname" name="fname" autocomplete="off">
				  </div>
			 </div>	
			<div class="form-group">
		 		<label class="control-label col-sm-2" for="gender"> Gender : </label> 
			 	<input type="radio" id="male" name="gender" value="male">
		 		<label for = "male">Male</label>

			    <input type="radio" id="female" name="gender" value="female"> 
			    <label for = "female">Female</label>	

				<input type="radio" id="transgender" name="gender" value="Transgender">	
				<label for = "transgender"> Transgender
				</label>
			</div>		
			<div class="form-group">
				<label class="control-label col-sm-2" for="Caste"> Caste :</label>
				<select name="Caste" id="Caste">
		        <option selected disabled>select</option>
		  		<option value="OPEN">OPEN</option>
		  		<option value="OBC">OBC</option>
		  		<option value="SC">SC</option>
		  		<option value="ST">ST</option>
				</select>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="dob"> Date of Birth : </label>
					<div class="form-group">
						<input type="Date" name="dob" id= "dob" autocomplete="off"><br><br>
			 		</div>
	 		</div>	
	 		<div class="form-group">
				<label class="control-label col-sm-2" for="email"> Email :</label>
					<div class="col-sm-6"> 
						<input type="text" class="form-control" id="email" name="email" autocomplete="off">
					</div>
			</div>
			<div class="form-group">
			 	<label class="control-label col-sm-2" for="mob"> Mobile no :</label>
				 	<div class="col-sm-6">
				 		<input type="text" class="form-control" id="mob" name="mob" autocomplete="off">	
				 	</div>
			</div>
			<div class="form-group">
			 	<label class="control-label col-sm-2"  for="pic"> Profile pic : </label>
				 	<div class="form-group">
				 		<input type="file" id="pic" name="pic">
				 	</div>
	 		</div>
	 		<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div> 

</body>
</html>













