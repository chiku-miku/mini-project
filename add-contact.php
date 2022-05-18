<?php
    include('config.php');
    if(isset($_POST['name'])){
        $sql = "INSERT INTO contacts (name, email, mobile, message, created_at) 
        VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['message']."' , '".date('Y-m-d h:i:s')."')" ;

        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost/mini-project/contact-list.php");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    include('common/header.php'); 
  ?>
  <link rel="stylesheet" href="asset/css/style.css">
  <title>Signup</title>
</head>
<body class="login-body">
  <!--Menu.Start.-->
  <?php 
    include('common/menu.php'); 
  ?>
  <!-- End -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-primary mt-30">
          <div class="panel-heading">Add Contact</div>
           <div class="panel-body">
              <div class="panel-group">
                  <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Please Enter Your  Name" required> 
                    </div>

                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Please Enter Your Email Id" required> 
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile No</label>
                        <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Please Enter Your Mobile No" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <input class="form-control" type="text" id="message" name="message" placeholder="Please Enter Your Message" required>
                    </div>

                    <div class="form-group">
                      <div class="">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                    </div>
                  </form>
              </div>
           </div> 
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
  <!-- Menu Start -->
  <?php 
    include('common/footer.php'); 
  ?>
  <!-- End -->
</body>
</html>


