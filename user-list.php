<?php
    include('config.php');
    
      

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        echo "<pre>";
        print_r(mysqli_num_rows($result));
        die();

        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    
?>

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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary mt-30">
                    <div class="panel-heading">User List</div>
                    <div class="panel-body">
                        <div class="panel-group">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="info">
                                        <td>Info</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                        <td>
                                            <a href="#" class="btn btn-info">Edit</a>&nbsp;&nbsp;
                                            <a href="#" class="btn btn-primary">Update</a>&nbsp;&nbsp;
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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




