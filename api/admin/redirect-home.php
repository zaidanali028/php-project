


<?php
$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";
$path . "/admin" ==$request? header("Location: ./") : header("Location: ../");


// as soon as admin hits this endpoint-we redirect him/her to the home page
?>