<?php

// routing logic



$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";

switch ($request) {
    // index routes
    case  $path.'/':
        require __DIR__ . '/views/main/index.php';
        break;
    case '':
        require __DIR__ . '/views/main/index.php';
        break;


    case  $path."/tuts":
        require __DIR__ .  '/views/main/tuts.php';
        break;
 
       
    //    admin routes
        case  $path."/admin":
            require __DIR__ .  '/views/admin/index.php';
            break;
        case  $path."/admin/add":
            // static css assets aint working here 
                require __DIR__ .  '/views/admin/index.php';
            break;
  
//   anythign else's routes
            default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
