<?php

include_once 'api/global_functions.php';
include 'db-con.php';
session_start();
$checkLogin=check_is_loggedIn($mysqli);
if($checkLogin['is_loggedIn']==true){
    header("Location: admin/add");

}else{
    header("Location: ./");

}
// as soon as admin hits this endpoint-we redirect him/her to the add admin page
?>