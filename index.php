<?php

// routing logic



$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";

switch ($request) {
        // GET REQUESTS
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
    
     case  $path."/courses-list":
            require __DIR__ .  '/views/main/questions-list.php';
            break;
 
       
    //    admin routes
        case  $path."/admin":
            require __DIR__ .  '/views/admin/index.php';
            break;
        case  $path."/admin/add":
            // static css assets aint working here 
                require __DIR__ .  '/views/admin/add-tut-question.php';
            break;
            case  $path."/admin/add-tut-data":
                // static css assets aint working here 
                    require __DIR__ .  '/views/admin/add-tut-def.php';
                break;
                case  $path."/admin/add-answer":
                    // static css assets aint working here 
                        require __DIR__ .  '/views/admin/add-answer.php';
                    break;



            // POST REQUESTS
            case  $path."/admin/add-tut":
                // static css assets aint working here 
                    require __DIR__ .  '/api/admin/add-tut-question.php';
                break;
                case  $path."/admin/add-tut-spec":
                    // static css assets aint working here 
                        require __DIR__ .  '/api/admin/add-tut-question-spec.php';
                    break;
                    case  $path."/admin/add-question-ans":
                        // static css assets aint working here 
                            require __DIR__ .  '/api/admin/add-question-ans.php';
                        break;
  
//   anythign else's routes
            default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
