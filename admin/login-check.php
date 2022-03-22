<?php
     
    //authorization - access control
    //check wheter user is logged in
    if(!isset($_SESSION['user']))    //if user session is not set
    {
        //user is not logged in
        //redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error'>Please Login To Access Admin Panel.</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
?>