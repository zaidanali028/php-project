<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'learning_spy')  or die(mysqli_error($mysqli));

if (isset($_POST['sub-ans'])) {
    $answer_txt = $_POST['answer_txt'];
    $question_id = $_POST['question_id'];

    $is_correct = $_POST['is_correct'] == "true" ? 1 : 0;

    $res =  $mysqli->query("SELECT * FROM answers where tut_question_id='$question_id'  ") or
        die($mysqli->error);
    $answer_count = count($res->fetch_assoc());
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
