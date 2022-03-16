<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'learning_spy')  or die(mysqli_error($mysqli));

if (isset($_POST['sub-ans'])) {
    $answer_txt = $_POST['answer_txt'];
    $question_id = $_POST['question_id'];

    $is_correct = $_POST['is_correct'] == "true" ? 1 : 0;

    $res =  $mysqli->query("SELECT COUNT(*) FROM answers WHERE tut_question_id='$question_id'  ") or
        die($mysqli->error);
    $answer_count =$res->fetch_assoc()['COUNT(*)'];
//     $question_count =  $mysqli->query("SELECT COUNT(*) FROM  tut_questions WHERE tut_id='$tutId' ") or
//     die($mysqli->error);
// $qCount = $question_count->fetch_assoc()['COUNT(*)']
    if ($answer_count >= 4) {
        $_SESSION['message'] = "Only 4(four) answers are allowed per question,kindly delete some for this question inorder to add a new question";
        $_SESSION['msg_type'] = "danger";
    } else {
        $res =  $mysqli->query("INSERT INTO answers (tut_question_id,answer_txt,is_correct)  VALUES('$question_id','$answer_txt','$is_correct') ") or
            die($mysqli->error);
            if($res==1){
                $_SESSION['message'] = "A new answer was added to the question ";
                $_SESSION['msg_type'] = "success";
            }
    }



 
}
