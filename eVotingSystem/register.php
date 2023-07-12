    <?php 
        include "header.php";
        if(!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['SESS_NAME'])!="") {
	        header("Location: voter-section.php");
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
    <title>Registration Page</title>
</head>
<body>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <div class="form-container">
            <?php global $message; echo $message; ?> 
        <form action="voter-reg-action.php" method="post" id="voter-reg-form">
            <fieldset>
                <legend>VOTER REGISTRATION</legend>
                <label for="fname">Firstname: 
                <input type="text" name="fname" id="fname" placeholder="Enter your Firstname" required maxlength="50"></label>
                <label for="lname">Lastname: 
                <input type="text" name="lname" id="lname" placeholder="Enter your Lastname" required maxlength="50"></label>
                <label for="username">Username: 
                <input type="text" name="username" id="username" placeholder="Enter a username" required maxlength="20"></label>
                <label for="password">Password:
                <input type="password" name="password" id="password" placeholder="min 6 chars" required minlength="6"></label>
                <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
                <input type="submit" id="btn" value="REGISTER">
            </fieldset>
        </form>
    </div>
</body>
</html>