<?php
include 'config.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Middle Name</td>
    <td>Last Name</td>
    <td>Gender</td>
    <td>Date Of Birth</td>
    <td>Email Id</td>
    <td>Mobile Number</td>
    <td>Caste</td>
    <td>Created At</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id "]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["middle_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["date_of_birth"]; ?></td>
    <td><?php echo $row["email_id"]; ?></td>
    <td><?php echo $row["mobile_no"]; ?></td>
    <td><?php echo $row["caste"]; ?></td>
    <td><?php echo $row["created_at"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>









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
    <?php include('common/menu.php'); ?>
    <!-- End -->


    <!-- Menu Start -->
    <?php include('common/footer.php'); ?>
    <!-- End -->
</body>
</html>