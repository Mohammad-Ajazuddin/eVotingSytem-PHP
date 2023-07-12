<?php
    session_start();
    include 'connection.php';

    $fname = mysqli_real_escape_string($cxn, $_POST['fname']);
    $lname = mysqli_real_escape_string($cxn,$_POST['lname']);
    $uname = mysqli_real_escape_string($cxn,$_POST['username']);
    $pwd   = mysqli_real_escape_string($cxn,$_POST['password']);

    $check = mysqli_query($cxn, 'SELECT username FROM loginusers WHERE username="'.$_POST['username'].'"');
    $exist = mysqli_num_rows($check);
	
		if($exist==1){// I kept usernames unique. so if 1 such username exists, need to chose another unique username to reg
		    $message ='<div><h4 style="color:red; text-align:center;">The Username exists. Retry with another one!</h4></div>';
		    unset($username);
		    include('register.php');
		    exit();
		}
        
         $ins_data_voters = mysqli_query($cxn, 'INSERT INTO voters(firstname,lastname,username)
         VALUES("'.$_POST['fname'].'","'.$_POST['lname'].'","'.$_POST['username'].'")');
		 if (!$ins_data_voters) { 
		    die (mysqli_error($cxn));
		 }

        $ins_data_login_users = mysqli_query($cxn, 'INSERT INTO loginusers(username,password)
         VALUES("'.$_POST['username'].'","'.$_POST['password'].'")'); 
        //removing encryption to check issues. .md5($_POST['password]).
        if (!$ins_data_login_users) { 
		    die (mysqli_error($cxn));
		}

        else {
            echo '<div style="margin: 100px;px auto; width:50%; padding:20px;"><h2>Successfully Registered. <a href="login.php">Back to Login</a></h2></div>';
        }
?>