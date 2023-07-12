<?php
    if(!isset($_SESSION)) { 
    session_start();
}
    include "checklogin.php";
    include "header_voter.php";
    include "connection.php";
    $username = $_SESSION['SESS_NAME'];
    $query = 'SELECT * FROM voters WHERE username = "'. $username .'"';
    $record = mysqli_query($cxn,$query);
    $getfield = mysqli_fetch_assoc($record);
    $firstname = $getfield['firstname'];
    $lastname = $getfield['lastname'];
    $status = $getfield['status'];
    $votedto = $getfield['voted-to'];
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Profile</title>
    <style>
        .profile-container{
            max-width:400px;
            margin: 2rem auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap:20px;
            padding: 20px;
            border:1px solid grey;
            box-shadow: 3px 3px 3px 4px brown;
            border-radius:5px;
        }
        p{
            font-weight : 800;
        }
    </style>
</head>
<body>
        <h2 style="text-align:center; margin-top:8rem;">Your Profile Info</h2>
    <div class="profile-container">
        <h3>Welcome : '. $username .'</h3>
        <p>Firstname : '. $firstname .'</p>
        <p>Lastname : '. $lastname .'</p>
        <p>Status : '. $status .'</p>
        <p>Voted To : '. $votedto .'</p>
    </div>
</body>
</html>'
?>