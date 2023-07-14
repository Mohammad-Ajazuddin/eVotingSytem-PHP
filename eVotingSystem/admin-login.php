<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    include "header.php"; 
    // if (isset($_SESSION) && isset($_SESSION['SESS_NAME'])!="admin") {
	//     header("Location: admin-login.php");
    //     exit();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <title>Admin Login Page</title>
</head>
<div class="form-container">
            <?php global $message; echo $message; ?>
        <form action="admin-action.php" method="post" id="voter-reg-form">
            <fieldset>
                <legend>ADMIN LOGIN</legend>
                <label for="username">Admin Username: 
                <input type="text" name="admusername" id="username" placeholder="Enter username" required maxlength="20"></label>
                <label for="password">Admin  Password:
                <input type="password" name="admpassword" id="password" placeholder="Enter Your Password" required minlength="6"></label>
                <input type="submit" id="btn" name="login" value="LOGIN">
                <!--<div><p>Not Registered yet? <a href="register.php" style="color:brown; font-weight:600;">Register Now!</a></p></div>-->
            </fieldset>
        </form>
    </div>
</body>
</html>