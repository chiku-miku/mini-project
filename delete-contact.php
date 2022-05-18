<?php
    include('config.php');
    if(isset($_GET['id'])){
        $sql = "DELETE FROM contacts WHERE id = '".$_GET['id']."'";
        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost/mini-project/contact-list.php");
        }
    }   
?>
