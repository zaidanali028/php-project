<?php

// routing logic

$tut_id=isset($_GET['tutorial-id'])?$_GET['tutorial-id']:"";
$qst_id=isset($_GET['qst_id'])?$_GET['qst_id']:"";


$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";
// echo $request;
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
    case  $path."/tutorial-question?tutorial-id=".$tut_id:
        require __DIR__ .  '/views/main/tutorial-question.php';
        break;
    
        case  $path."/test_result":
            require __DIR__ .  '/views/main/test_res.php';
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



            // POST REQUESTS-ADMIN
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

                        case  $path."/delete-tut?q_id=".$qst_id:
                            require __DIR__ .  '/api/main/delete.php';
                            break;
                            // /delete?q_id=$qst_id
            
            // POST REQUESTS-GENERAL
            
                        case  $path."/validate-answers":
                require __DIR__ .  '/api/main/validate-answers.php';
                break;
  
//   anythign else's routes
            default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
