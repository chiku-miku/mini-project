
<?php
include 'config.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Retrive data</title>
    <meta charset="utf-8">    
    <?php include('common/header.php'); ?>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body class="login-body">
    <!-- Menu Start -->
    <?php include('common/menu.php'); ?>
    <!-- End -->






    <!-- Menu Start -->
    <?php include('common/footer.php'); ?>
    <!-- End -->
 </body>
</html>





