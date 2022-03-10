<?php

// routing logic

$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";
// echo  $path . '/tuts';
// echo $request;
switch ($request) {
    case  $path.'/':
        require __DIR__ . '/views/main/index.php';
        break;
    case '':
        require __DIR__ . '/views/main/index.php';
        break;


    case  $path."/tuts":
        require __DIR__ .  '/views/main/tuts.php';
        break;
 


    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
