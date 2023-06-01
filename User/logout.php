<!--Destroy User session  -->
<?php
 
    session_start();
    unset($_SESSION['user_email']);
    unset($_SESSION['user_id']);
    session_destroy();
    header("location:../index.php");

?>