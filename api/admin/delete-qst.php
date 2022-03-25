<!-- delete -->

<?php

// TUT_QUESTION_ID IS THE QUESTION'S ID
session_start();
$qst_id=isset($_GET['q_id'])?$_GET['q_id']:"";

include 'db-con.php' ;

// firstly delete all answers relating to this question
$res =  $mysqli->query("DELETE FROM answers WHERE tut_question_id='$qst_id' ") or
die($mysqli->error);


// get the question and display if
$res =  $mysqli->query("SELECT *  FROM tut_questions WHERE tut_question_id='$qst_id' ") or
die($mysqli->error);
$qst_data=$res->fetch_assoc()['main_question'];

// then delete the question
$res =  $mysqli->query("DELETE  FROM tut_questions WHERE tut_question_id='$qst_id' ") or
die($mysqli->error);





// delete tutorial
$res =  $mysqli->query("DELETE FROM tut_table WHERE tut_id='$qst_id' ") or
die($mysqli->error);
if ($res == 1) {

    $_SESSION['msg_type'] = "success";
  $_SESSION['msg'] = "The tutorial $qst_data, is deleted successfully";

  // echo $_SESSION['msg'];

  // redirection after successful deletion of a  tut
  header("location: ./add");
} else {
  // it failed
}


?>