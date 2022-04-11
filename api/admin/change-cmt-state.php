<?php
$cmt_id = isset($_GET['cmt_id']) ? $_GET['cmt_id'] : "";
$comment_exsist =  $mysqli->query("SELECT * FROM  comments WHERE comment_id='$cmt_id' ") or
    die($mysqli->error);
if (mysqli_num_rows($comment_exsist) == 1) {
    //  if comment exsists,lets change its state :)
    $pending_state =  $comment_exsist->fetch_assoc()['is_pending'];
    if ($pending_state == 1) {
        $pending_state = 0;
    } elseif ($pending_state == 0) {
        $pending_state = 1;
    }

    $comment_change =  $mysqli->query("UPDATE  comments SET is_pending= '$pending_state'  WHERE comment_id='$cmt_id' ") or
        die($mysqli->error);
    if ($comment_change == 1) {
    //    if update was a success,
    $_SESSION['msg_type'] = "success";
    $_SESSION['msg'] = "The comment  with id $cmt_id, has been updated :)";
  
    // echo $_SESSION['msg'];
  
    // redirection after successful deletion of a  tut
    header("location: ./view-comments");
    }
}
