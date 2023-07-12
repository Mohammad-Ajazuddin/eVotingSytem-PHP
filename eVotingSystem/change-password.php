<?php
    if(!isset($_SESSION)) { 
    session_start();
}
    include "checklogin.php";
    include "header_voter.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <title>Update password</title>
</head>
<body>
    <div class="form-container">
            <h4 style="text-align: center;"><?php echo "Hello   " .$_SESSION['SESS_NAME']?></h4> <!--username is stored in SESS_NAME-->
            <?php global $message; echo $message; ?> 
        <form action="change-pwd-action.php" method="post" id="voter-reg-form">
            <fieldset>
                <legend>CHANGE PASSWORD</legend>
                <label for="currentpassword">Enter your current password: 
                <input type="password" name="currentpassword" id="currentpassword" placeholder="current password" required maxlength="50"></label>
                <label for="newpassowrd">Enter your new password:  
                <input type="password" name="newpassword" id="lname" placeholder="new password: " required maxlength="50"></label>
                <label for="confirmpassword">Confirm your new password:
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirmpassword" required maxlength="50"></label>
                <input type="submit" name="change-pwd" id="btn" value="UPDATE PASSWORD">
            </fieldset>
        </form>
    </div>
</body>
</html>