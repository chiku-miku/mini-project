<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Signup</a></li>
      <li><a href="#">Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
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
<div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary mt-50">
                <div class="panel-heading">Signup</div>
                <div class="panel-body">
                    <div class="panel-group">
                        <form action="" method="post">
                            <div class="form-group">
			                	<label for="fname"> Name : </label>
				  	        <div>
				  		        <input class="form-control" type="text" id="fname" name="fname" autocomplete="off">
				            </div>
			                </div><br><br>	
			                <div class="form-group">
                                    <label for="gender"> Gender: </label> 
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for = "male">Male</label>

                                    <input type="radio" id="female" name="gender" value="female"> 
                                    <label for = "female">Female</label>	

                                    <input type="radio" id="transgender" name="gender" value="Transgender">	
                                    <label for = "transgender"> Transgender
                                    </label>
                            </div>		
                            <div class="form-group">
                                <label  for="Caste"> Caste :</label>
                                <select name="Caste" id="Caste">
                                <option selected disabled>select</option>
                                <option value="OPEN">OPEN</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                </select>
                            </div>
                            <div class="form-group">
			                	    <label for="dob"> Date of Birth : </label>
					        <div class="form-group">
						            <input type="Date" name="dob" id= "dob" autocomplete="off">
			 		        </div>

	 		                <div class="form-group">
                                    <label  for="email"> Email :</label>
				        	<div> 
						            <input type="text" class="form-control" id="email" name="email" autocomplete="off">
					        </div>
			                </div>
			                <div class="form-group">
                                    <label for="mob"> Mobile no :</label>
				 	        <div>
				 		            <input type="text" class="form-control" id="mob" name="mob" autocomplete="off">	
				 	        </div>
                            </div>
                            <div class="form-group">
			 	                    <label for="pic"> Profile pic : </label>
                            <div class="form-group">
                                      <input type="file" id="pic" name="pic">
				 	        </div>
	 		                </div>
                            <div class="form-group">
	    	            	<div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
			            	</div>
			          </div>
                </div> 
            </div> 
    </div>     
</form>
</body>
</html>













