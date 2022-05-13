<div class="topnav">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

                <!-- Before login urls -->
                <?php if(!isset($_SESSION["id"])){ ?>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php } ?>

                <!-- After login urls -->
                <?php if(isset($_SESSION["id"])){ ?>
                    <div id="myLinks">
                        <!-- <a href="profile.php">Update Profile</a> -->
                        <!-- <a href="user-list.php">User List</a> -->

                        <li><a href="user-list.php">User List</a></li>
                        <!-- <li><a href="contact-list.php">Contact List</a></li> -->
                        <li><a href="dashboard.php">My Profile</a></li>
                        <li><a href="profile.php">Edit Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </div>

                <?php } ?>

            </ul>
        </div>
    </nav>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>
<script>
    function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }
</script>







  
