<?php
    session_start();
    include 'header_voter.php';
    include 'connection.php';
    $user = $_SESSION['SESS_NAME'];
    $checkstatus = mysqli_query($cxn,'SELECT * FROM voters WHERE username = "'. $user . '" AND status = "VOTED"');
    if(mysqli_num_rows($checkstatus)>0)
    {
        $message = '<div><h4 style="color:red; text-align:center;">You can vote only once!</h4></div>';
        include 'voter-section.php';
        exit();
    }
    else{
        $candID = $_POST['candID'];
        $result_query1 = mysqli_query($cxn,'SELECT name FROM candidates WHERE candidate_id = "' .$candID. '"');
        $row = mysqli_fetch_assoc($result_query1);
        $votedto = $row['name'];
        $updateVoteCount = mysqli_query($cxn,'UPDATE candidates SET vote_count = vote_count+1 WHERE candidate_id = "'. $candID .'"');
        $updateStatus = mysqli_query($cxn,'UPDATE voters SET status = "VOTED" WHERE username = "'. $user .'"');
        $updateVotedTo = mysqli_query($cxn,'UPDATE voters SET `voted-to` = "'. $votedto .'" WHERE username = "'. $user .'"');
        if(!$updateVoteCount && !$updateStatus && !$updateVotedTo){
            die("Error on MySql Query".mysqli_error($cxn));
        }
        else{
            $message = '<div><h4 style="color:red; text-align:center;">You have Submitted your Vote Successfully!</h4></div>';
            include 'voter-section.php';
            exit();
        }
    }  
?>