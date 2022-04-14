<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">    
    <?php include('common/header.php'); ?>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body class="login-body">
    <!-- Menu Start -->
        <?php include('common/menu.php'); ?>
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