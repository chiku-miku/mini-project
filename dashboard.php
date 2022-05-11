<?php
    include('config.php');
    if(!isset($_SESSION["id"])){
        header("Location: http://localhost/mini-project/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
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
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-primary mt-30">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <div class="panel-group" style="overflow-x:auto;">
                          <h1>Welcome to my home</h1> 
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

