<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'views/partials/main/head.php' ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

   

      
        
        .wrapper {
            max-width: 600px;
            margin: 80px auto 50px;
            padding: 30px;
            border-radius: 20px;
            background: rgb(63, 139, 139);
            border: 1px solid black;
            position: relative;
            min-height: 400px;
            overflow: hidden;
  box-shadow: 2px 3px 3px rgba(0, 0, 0, 0.2);

        }

        .wrapper .wrap {
            width: 500px;
            position: absolute;
            left: 50px;
            transition: 0.6s
        }

        #q2,
        #q3 {
            left: 650px
        }

        .h4 {
            margin: 0
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-size: 1.2rem;
            cursor: pointer
        }

        .options {
            position: relative;
            padding-left: 30px
        }

        .options input {
            opacity: 0
        }

        .checkmark {
            position: absolute;
            top: 4px;
            left: 3px;
            height: 20px;
            width: 20px;
            background-color: white;
            border: 2px solid #444;
            border-radius: 50%
        }

        .options input:checked~.checkmark:after {
            display: block
        }

        .options .checkmark:after {
            content: "";
            width: 9px;
            height: 9px;
            display: block;
            background: black;
            position: absolute;
            top: 51%;
            left: 51%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark {
            background: #fff;
            border: 2px solid #fff;
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1)
        }

        .btn.btn-primary {
            background-color: rgb(63, 139, 139);
            border: 1px solid rgb(63, 139, 139)
        }

        .btn {
            background-color: inherit;
            border: 1px solid rgb(63, 139, 139);
            border-radius: 20px
        }

        .btn:focus {
            box-shadow: none
        }

        .btn:hover {
            background-color: teal;
            color: #fff
        }

     
    </style>

</head>

<body>
   <div class="nav-content">
<?php include 'views/partials/main/navbar.php' ?>

</div>

    <div class="container-fluid ">


        <?php

        include 'db-con.php';
        ?>
        <?php
        $tutId = $_GET['tutorial-id'];

        $res =  $mysqli->query("SELECT * FROM  tut_questions WHERE tut_id='$tutId'  ORDER BY RAND()
        LIMIT 20") or
            die($mysqli->error);
        $question_count =  $mysqli->query("SELECT COUNT(*) FROM  tut_questions WHERE tut_id='$tutId' ") or
            die($mysqli->error);
        $qCount = $question_count->fetch_assoc()['COUNT(*)']
        ?>
        <?php
        $index = 1;
        // echo "<form action ='./validate-answers' method='POST'> ";
        
        while ($row = $res->fetch_assoc()) : ?>

            <?php $main_question_txt = $row['main_question']; 
             $r =  $mysqli->query("SELECT * FROM  tut_questions WHERE main_question='$main_question_txt' ") or
                die($mysqli->error); 
             $current_question_id = $r->fetch_assoc()['tut_question_id']; 
      $current_question_id = (int) $current_question_id ;

             $re =  $mysqli->query("SELECT * FROM  answers WHERE tut_question_id=$current_question_id") or
                die($mysqli->error); ?>
           



           <form action ='./validate-answers' method='POST'>
           <div class="wrap-main" style="z-index:-1">

           <div class="wrapper" >
                <div class="wrap" id="q1">
                    <div class="text-center pb-4">
                        <div class="h5 font-weight-bold"><span id="number"> </span><?= $index ?> of <?= $qCount ?></div>
                    </div>
                    <div class="h4 font-weight-bold"><?= $index ?>.  <?= $row['main_question'] ?> </div>
                    <input type="hidden" name="<?= "qst$index"?>" value="<?= $row['main_question']?>">
                    <div class="pt-4">
                    <?php while($row=$re->fetch_assoc()): ?>
                <label class="options"><?=$row['answer_txt']?> <input type="radio" name="<?= "ans$index"?>"    value='<?= $row['answer_txt']?>'> <span class="checkmark"></span> </label> 
                <?php endwhile ?>

                 
                    </div>
                </div>
            </div>
           </div>

        <?php
            $index += 1;
        endwhile ?>
<div class="row container ">
    <div class="col-md-12 d-flex justify-content-end">
        <button class="btn btn-primary align-center p-3">Submit For Assessment</div>
        </form>

    </div>
</div>



</body>


</div>
<?php
include 'db-con.php';
$tut_id = $_GET['tutorial-id'];
if ($tut_id) {
    $res =  $mysqli->query("SELECT * FROM  tut_questions WHERE tut_id='$tut_id' ") or
        die($mysqli->error);
    while ($row = $res->fetch_assoc()) {
     
    }
};
?>

<?php include 'views/partials/main/footer.php' ?>

</body>

</html>