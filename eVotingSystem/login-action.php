<?php
    session_start();
    include "connection.php"; 
    //if(isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $username = addslashes($username);
    $password = addslashes($password);
    $username = mysqli_real_escape_string($cxn,$username);
    $password = mysqli_real_escape_string($cxn,$password);
   // $password = .md5($password);

        $sql_query = mysqli_query($cxn, 'SELECT * FROM loginusers WHERE username="'.$_POST['username'].'"  AND password="'.$_POST['password'].'"' );
        if (mysqli_num_rows($sql_query) >0 ) { //record exists with username and pwd
	        $member =  mysqli_fetch_assoc($sql_query);
	        $_SESSION['SESS_NAME'] = $member['username'];
		    header("location: voter-section.php");
	    }
    //}

    else {
	    $message = '<div><h4 style="color:red; text-align:center;">Incorrect username or password. Try Again!</h4></div>';
	    include "login.php";
    }
?>