<?php
session_start();
include 'db-con.php' ;

$tut_id=isset($_POST['tut-id'])?$_POST['tut-id']:"";
$qst_data=isset($_POST['main-question'])?$_POST['main-question']:"";
$qst_id=isset($_POST['qst_id'])?$_POST['qst_id']:"";


$res=  $mysqli->query("UPDATE tut_questions SET main_question='$qst_data' ,tut_id='$tut_id'  WHERE tut_question_id='$qst_id' ") or
die($mysqli->error);

$_SESSION['msg_type'] = "success";
$_SESSION['msg'] = "Update done successfully";

header("location: ./add-tut-data");
