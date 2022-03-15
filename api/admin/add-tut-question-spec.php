<?php 
$mysqli=new mysqli('localhost','root','','learning_spy')  or die(mysqli_error($mysqli));

function pre_r($array){
  echo '<pre>';
  print_r($array);
    echo '<pre>';
}

if (isset($_POST["sub-spec"])){
  $main_question=$_POST['main-question'];
  $tut_id=$_POST['tut-id'];
//   $main_name=$_FILES['file']['name'];
//   $temp_name=$_FILES['file']['tmp_name'];
// move_uploaded_file($temp_name,"video-files/".$main_name);
// tut sub is the tutorial's subtitle whiles the tut-video corresponds to the tutorial's video name
$res=  $mysqli->query("INSERT INTO tut_questions (tut_id,main_question)  VALUES('$tut_id','$main_question') ") or
die($mysqli->error);
// echo "$main_question,$tut_id";
if($res==1){
  header("location: ./add-tut-data");

}

}
?>