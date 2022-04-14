<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">    
    <?php include('common/header.php'); ?>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body class="login-body">
    <!-- Menu Start -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <!-- End -->
    
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary mt-30">
                <div class="panel-heading">Contact Us</div>
                <div class="panel-body">
                    <div class="panel-group">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Please Enter Your Name"> 
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
                                <label for="msg">Message</label>
                                <div>
                                    <textarea class="form-control" name="msg" id="msg" cols="70" rows="6" placeholder="Please Enter Your Message"></textarea>
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