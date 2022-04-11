<?php

include_once 'api/global_functions.php';
    // session_start();

$msg = $_POST['msg'];
$name = $_POST['name'];
$email = $_POST['email'];
$input_list = [array("identifier" => "message", "input_data" => $msg), array("identifier" => "name", "input_data" => $name), array("identifier" => "email", "input_data" => $email)];
$input_list2=[$msg,$name,$email];


stringValidator($input_list,'./');
$all_set=checkIsSet($input_list2);


if (isset($_POST["post_comment"])) {
    if($all_set==0){
        //meaning there is no empty fields
       $pushed_comment =  $mysqli->query("INSERT INTO comments(message,name,email) VALUES('$msg','$name','$email') ") or
        die($mysqli->error);
     
    }

 
}
