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
                <li ><a href="index.php">Home</a></li>
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
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <div class="panel-group">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Enter Your Email"> 
                            </div>

                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input class="form-control" type="password" id="pass" name="pass" placeholder="Enter Your Password">
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-warning">Login</button>
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