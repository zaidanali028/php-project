<?php
session_start();
$gen_result = array();
function ans_validator($qst, $ans)
{
    include 'db-con.php';


    if (isset($qst) && isset($ans)) {
        global $gen_result;
        // line 15 is required for the function to be able to use the global var
        $r =  $mysqli->query("SELECT * FROM  tut_questions WHERE main_question='$qst' ") or
            die($mysqli->error);
        $current_question_id = $r->fetch_assoc()['tut_question_id'];
        $current_question_id = (int) $current_question_id;

        // correct answer from db
        $correct_answer =  $mysqli->query("SELECT * FROM  answers WHERE tut_question_id='$current_question_id '  AND  is_correct=1") or
            die($mysqli->error);
        $correct_answer = $correct_answer->fetch_assoc()['answer_txt'];
        if ($correct_answer == $ans) {
            // if user gets an answer correct
            $single_result = array(
                "qst" => "$qst",
                "correct_ans" => "$correct_answer",
                "selected_ans" => "$ans",
                "is_correct" => 1
            );

            array_push($gen_result, $single_result);
        } else {
            // if user gets an answer wrong
            $single_result = array(
                "qst" => "$qst",
                "correct_ans" => "$correct_answer",
                "selected_ans" => "$ans",
                "is_correct" => 0

            );
            array_push($gen_result, $single_result);
        }

        // print_r($gen_result);
        // unset($_SESSION['final_assessment']);


        // after processing,store in session to access it globally :)
        // print_r( $_SESSION['final_assessment']);
    }
}

ans_validator($_POST['qst1'], $_POST['ans1']);
ans_validator($_POST['qst2'], $_POST['ans2']);

$_SESSION['final_assessment'] = $gen_result;
header("location: ./test_result");

// print_r($_SESSION['final_assessment']);

// call the function according to the number of questions sent to the client
