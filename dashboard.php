<?php
    session_start();
    // echo "<pre>";
    // print_r($_SESSION);
    // die();
    if(isset($_SESSION["id"])){
        echo $_SESSION["id"];
    }else{
        header("Location: http://localhost/mini-project/login.php");
    }
    
?>