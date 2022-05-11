<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="footer.php">WebSiteName</a>
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
                <li><a href="user-list.php">User List</a></li>
                <li><a href="contact-list.php">Contact List</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout(<?php echo $_SESSION["first_name"]; ?>)</a></li>
            <?php } ?>
         </ul>
    </div>
</nav>






  
