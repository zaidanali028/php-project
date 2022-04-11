<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'learning_spy')  or die(mysqli_error($mysqli));
$tut_id_2 = isset($_POST['tut_id']) ? $_POST['tut_id'] : "";

if (isset($_POST['sub-ans'])) {
    $answer_txt = $_POST['answer_txt'];
    $question_id = $_POST['question_id'];

    $is_correct = $_POST['is_correct'] == "true" ? 1 : 0;

    $res =  $mysqli->query("SELECT COUNT(*) FROM answers WHERE tut_question_id='$question_id'  ") or
        die($mysqli->error);
    $answer_count = $res->fetch_assoc()['COUNT(*)'];
    //     $question_count =  $mysqli->query("SELECT COUNT(*) FROM  tut_questions WHERE tut_id='$tutId' ") or
    //     die($mysqli->error);
    // $qCount = $question_count->fetch_assoc()['COUNT(*)']
    if ($answer_count >= 4) {
        $_SESSION['msg'] = "Only 4(four) answers are allowed per question,kindly delete some for this question inorder to add a new question";
        $_SESSION['msg_type'] = "danger";
        // /add-answer?tut-id=". $tut_id_2."&sub-spec="
        header("location: ./add-answer?tut-id=" . $tut_id_2 . "&sub-spec=");
    } else {
        $res =  $mysqli->query("INSERT INTO answers (tut_question_id,answer_txt,is_correct)  VALUES('$question_id','$answer_txt','$is_correct') ") or
            die($mysqli->error);
        if ($res == 1) {
            $_SESSION['msg'] = "$answer_txt is added to the question with id $question_id ";
            $_SESSION['msg_type'] = "success";
            $redirect_uri="./add-answer?tut-id=" . $tut_id_2 . "&sub-spec=";
            // echo $redirect_uri;
            header("location: $redirect_uri");
        }
    }
}
