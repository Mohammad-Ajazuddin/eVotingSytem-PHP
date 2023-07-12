<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    include 'checklogin.php';
    include 'header_voter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <style>
        #option:hover{
            cursor: pointer;
            background-color: darkorange;
            width:80%;
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>Voter Section</title>
</head>
<body>
    <div class="form-container">
           <?php 
             include 'connection.php';
             $records = mysqli_query($cxn,'SELECT * FROM candidates');
             $user = $_SESSION['SESS_NAME'];
             $candidateID ="";
             $candidateName ="";
            echo '<h4 style="text-align:center;">Welcome '. $user .'</h4>';
            echo '<form action="submit-vote.php" method="post" id="voter-reg-form">';
            echo '<fieldset>';
            echo '   <legend>ELECT YOUR REPRESENTATIVE</legend>';
                if(mysqli_num_rows($records)>0)
                {
                    while($record = mysqli_fetch_assoc($records))
                    {
                        $candidateID = $record["candidate_id"];
                        $candidateName = $record["name"];                                                                                                                          //style="display:none;" radio btns hidden
                        echo '<label for="'. $candidateID.'" id="option"><input type = "radio" name="candID" id='. $candidateID.' value = '. $candidateID .' required> '. $candidateName .'</label>';
                    }
                }
                else{
                   echo '<p> Currently there are No candidates to compete. </p>';
                }
                global $message; echo $message;
                global $error; echo $error;
           echo '<input type = "submit" value="Submit Your Vote" id="btn" name="submit">';
           echo '</fieldset>';
        echo '</form> ';?>
    </div>
</body>
</html>