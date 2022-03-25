<!-- delete -->

<?php

// TUT_QUESTION_ID IS THE QUESTION'S ID
session_start();
$qst_id=isset($_GET['q_id'])?$_GET['q_id']:"";

include 'db-con.php' ;

// get tutorail to delete's data
$res =  $mysqli->query("SELECT * FROM tut_table WHERE tut_id='$qst_id' ") or
die($mysqli->error);
$tut_name=$res->fetch_assoc()['tut_title'];


// deleting all questions associated to a tutorial
$res =  $mysqli->query("SELECT * FROM tut_questions WHERE tut_id='$qst_id' ") or
die($mysqli->error);
$question_id=$res->fetch_assoc()['tut_question_id'];
$res =  $mysqli->query("DELETE FROM tut_questions WHERE tut_question_id='$question_id' ") or
die($mysqli->error);

// deleting all questions associated to a tutorial
$res =  $mysqli->query("DELETE FROM answers WHERE tut_question_id='$question_id' ") or
die($mysqli->error);

// delete tutorial
$res =  $mysqli->query("DELETE FROM tut_table WHERE tut_id='$qst_id' ") or
die($mysqli->error);
if ($res == 1) {

    $_SESSION['msg_type'] = "success";
  $_SESSION['msg'] = "The tutorial $tut_name, is deleted successfully";

  // echo $_SESSION['msg'];

  // redirection after successful deletion of a  tut
  header("location: ./add");
} else {
  // it failed
}


?>