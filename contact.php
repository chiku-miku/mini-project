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