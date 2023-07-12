<?php
    if(!isset($_SESSION['SESS_NAME']))
    {
        header("location: login.php");
    }
?>