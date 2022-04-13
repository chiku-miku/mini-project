<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .container {
    width: 504px;
    margin-top: 50px;
    margin-left: 30px;
}
body {
  background-image: url('https://media.istockphoto.com/photos/hands-protecting-personal-data-information-on-tablet-information-and-picture-id1325214557?b=1&k=20&m=1325214557&s=170667a&w=0&h=VV9UeVy2lFtf6Zc5Q128JUoOOmCrl4KhJVDMFSdMn_8=');

  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  color: #323f9a;
}
</style>
<body>
    <div class="container">
        <div class="panel-group">
            <form class="panel panel-primary" class="form-horizontal" action="" method="post">
                <div class="panel-heading">Login Here</div>
                <div class="panel-body" class="form-group" class="input-group">
                    <label class="control-label col-sm-3" for="email">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Your Email"> 
                    </div>
                </div>

                <div class="panel-body" class="form-group">
                    <label class="control-label col-sm-3" for="pass">Password</label><br>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" id="pass" name="pass" placeholder="Enter Your Password"> 
                    </div>
                </div>

                <div class="panel-body" class="form-group">        
                    <div class="col-sm-offset-5 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                <!-- <div class="input-group">
                    <label for="email">Email</label><br>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div> -->
            </form>
        </div>
    </div>
    
</body>
</html>