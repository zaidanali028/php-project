<?php
session_start();
include 'db-con.php' ;

$answer_id=isset($_POST['answer_id'])?$_POST['answer_id']:"";
$is_correct=isset($_POST['is_correct'])?$_POST['is_correct']:"";
$is_correct=$is_correct==true?1:0;
if(isset($_POST['sub-opt'])){
    // echo $is_correct;
    $res=  $mysqli->query("UPDATE answers SET is_correct='$is_correct'   WHERE answer_id='$answer_id' ") or
    die($mysqli->error);
    
    $_SESSION['msg_type'] = "success";
    $_SESSION['msg'] = "Update[Correctness] done successfully";
    
    header("location: ./mod-ans");
}




