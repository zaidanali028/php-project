<?php
include 'db-con.php';


session_start();

$qst_id = isset($_POST['qst']) ? $_POST['qst'] : "";
echo $qst_id;

if (isset($_POST["sub-ans"])) {

  $res =  $mysqli->query("SELECT * FROM  answers    WHERE tut_question_id='$qst_id'   ") or
    die($mysqli->error);


  while ($row = $res->fetch_assoc()) {
    $ans = "answer_text"."-".$row['answer_id'];
    $ans_id = $row['answer_id'];



    

    $ans_id= isset($_POST["$ans_id"])?$_POST["$ans_id"]:"";
    $new_ans= isset($_POST["$ans"])?$_POST["$ans"]:"";

echo  "ans is $ $new_ans,ans_id is $ans_id AND qst_id is $qst_id";
 




   
    $mysqli->query("UPDATE answers SET  answer_txt='$new_ans' WHERE  tut_question_id='$qst_id' AND answer_id='$ans_id'" ) or
    die($mysqli->error);
   
$_SESSION['msg_type'] = "success";
$_SESSION['msg'] = "Update done successfully";

header("location: ./mod-ans");



  }
}
