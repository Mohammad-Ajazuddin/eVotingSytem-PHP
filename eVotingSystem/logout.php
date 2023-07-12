<?php
    session_start();
    session_unset();
    session_destroy();
    $message = '<div><h4 style="color:red; text-align:center;">Logged out Successfully!</h4></div>;';
    include 'login.php';
?>