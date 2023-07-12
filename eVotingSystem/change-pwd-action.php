<?php
    session_start();
    include "checklogin.php";
    include "connection.php"; 

if(isset($_POST['change-pwd'])) {
	$currentpwd = $_POST['currentpassword'];
	$newpwd = $_POST['newpassword'];
	$confirmpwd = $_POST['confirmpassword'];
	$currentpwd = addslashes($currentpwd);
	$newpwd = addslashes($newpwd);
	// $confirmpwd = addslashes($confirmpwd); 
	// $currentpwd = mysqli_real_escape_string($cxn, $currentpwd);
	// $newpwd = mysqli_real_escape_string($cxn, $newpwd);
	// $confirmpwd = mysqli_real_escape_string($cxn, $confirmpwd);
                                                                            //current logged in user
$sql = mysqli_query($cxn, 'SELECT password FROM loginusers WHERE username="'.$_SESSION['SESS_NAME'].'" ');
$row = mysqli_fetch_assoc($sql);
$pwdindb = $row['password'];

if ($currentpwd != $pwdindb) {
    $message = '<div><h4 style="color:red; text-align:center;">Your current password is incorrect. Try Again!</h4></div>';
	include ("change-password.php");
}
else if ($newpwd != $confirmpwd){
    $message = '<div><h4 style="color:red; text-align:center;">Your new password and confirm password do not match!</h4></div>';
    include ("change-password.php");
}
else if ($newpwd == $currentpwd){
	$message = '<div><h4 style="color:red; text-align:center;">Your current password and new password are same!</h4></div>';
	include ("change-password.php");
}
else if(($newpwd != $currentpwd) && ($newpwd == $confirmpwd)){
    $sql1 = mysqli_query($cxn, 'UPDATE loginusers SET password="'. $_POST['newpassword'].'" WHERE username="'.$_SESSION['SESS_NAME'].'" ');
    $message = '<div><h4 style="color:red; text-align:center;">Your password is changed!</h4></div>';
    include ("change-password.php");
}
}
else {
	$message = '<div><h4 style="color:red; text-align:center;">Error!</h4></div>';
	include ("change-password.php");
}
?>