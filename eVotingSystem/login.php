<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    include "header.php"; 
    if (isset($_SESSION) && isset($_SESSION['SESS_NAME'])!="") {
	    header("Location: voter-section.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <script src="validation.js" type="javascript"></script>
    <title> Login Page</title>
</head>
<div class="form-container">
            <?php global $message; echo $message; ?>
        <form action="login-action.php" method="post" id="voter-reg-form">
            <fieldset>
                <legend>VOTER LOGIN</legend>
                <label for="username">Username: 
                <input type="text" name="username" id="username" placeholder="Enter username" required maxlength="20"></label>
                <label for="password">Password:
                <input type="password" name="password" id="password" placeholder="Enter Your Password" required minlength="6"></label>
                <input type="submit" id="btn" name="login" value="LOGIN">
                <div><p>Not Registered yet? <a href="register.php" style="color:brown; font-weight:600;">Register Now!</a></p></div>
            </fieldset>
        </form>
    </div>
</body>
</html>