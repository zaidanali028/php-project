<!-- "https://i.imgur.com/CFpa3nK.jpg"  -->
<!--Comment partial -->
<section>
    <?php
       $all_comments=  $mysqli->query("SELECT * FROM  comments ") or
       die($mysqli->error);

    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                <?php while($r=$all_comments->fetch_assoc()): ?>
                   <?php if($r['is_pending']==0):?>
                    <?php $datetime_from_db=$r['created_at'];?>
                    <?php $datetime_from_db= date('d-M-Y', strtotime($datetime_from_db));?>
                    <?php $random_image_url='public/admin/images/faces/face'.rand(1,26).'.jpg '?>
                <div class="comment mt-4 text-justify float-left"> <img src="<?=$random_image_url?>" alt="" class="rounded-circle" width="40" height="40">
                    <h4><?=$r['name']?></h4> <span>- <?=$datetime_from_db?></span> <br>
                    <p><?=$r['message']?></p>
                </div>
             
                <?php elseif($r['is_pending']==1):?>
                    <?php $datetime_from_db=$r['created_at'];?>
                    <?php $datetime_from_db= date('d-M-Y', strtotime($datetime_from_db));?>
                <div class="comment mt-4 text-justify float-left">
                <h4><?=$r['name']?></h4> <span>- <?=$datetime_from_db?></span> <br>
                   
                    <p>PENDING COMMENT AWAITING ADMIN APPROVAL</p>
                </div>
                <?php endif?>

                <?php endwhile; ?>


             

            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="./process-comment" method="POST" class="border-form">
                    <div class="form-group">
                        <?php if (isset($_SESSION['errors'])) : ?>
                            <?php $user_errors = $_SESSION['errors']; ?>
                            <?php foreach ($user_errors as $err) : ?>
                                <div class="alert alert-danger"> <?= $err; ?></div>

                            <?php endforeach; ?>
                            <?php unset($_SESSION['errors']); ?>

                        <?php endif; ?>








                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea  name="msg" id="msg_area"  cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" class="form-control"> </div>
                    <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>


                    <div class="form-group"> <button type="submit" id="post" class="btn" name="post_comment">Post Comment</button> </div>
                </form>
            </div>
        </div>
    </div>
</section>


<style>
    @media(min-width:568px) {
        .end {
            margin-left: auto
        }
    }

    @media(max-width:768px) {
        #post {
            width: 100%
        }
    }

    #clicked {
        padding-top: 1px;
        padding-bottom: 1px;
        text-align: center;
        width: 100%;
        background-color: #ecb21f;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px
    }

    #profile {
        background-color: unset
    }

    #post {
        margin: 10px;
        padding: 6px;
        padding-top: 2px;
        padding-bottom: 2px;
        text-align: center;
        /* background-color: #ecb21f; */
        border: 3px solid black;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px;
        width: 50%
    }



    #nav-items li a,
    #profile {
        text-decoration: none;
        color: rgb(224, 219, 219);
        background-color: black
    }

    .comments {
        margin-top: 5%;
        margin-left: 20px
    }

    .darker {
        border: 1px solid #ecb21f;
        background-color: black;
        float: right;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px
    }

    .comment {
        border: 1px solid rgba(16, 46, 46, 1);

        float: left;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px
    }

    .comment h4,
    .comment span,
    .darker h4,
    .darker span {
        display: inline
    }

    .comment p,
    .comment span,
    .darker p,
    .darker span {
        color: rgb(184, 183, 183)
    }

    h1,
    h4 {
        /* color: white; */
        font-weight: bold
    }

 

    #align-form {
        margin-top: 20px
    }

    .form-group p a {
        /* color: white */
    }

    #checkbx {
        background-color: black
    }

    #darker img {
        margin-right: 15px;
        position: static
    }

    .form-group input,
    .form-group textarea {
        background-color: black;
        border: 1px solid rgba(16, 46, 46, 1);
        border-radius: 12px
    }

    .border-form {
        border: 1px solid rgba(16, 46, 46, 1);
        /* background-color: rgba(16, 46, 46, 0.973); */
        border-radius: 5px;
        padding: 20px
    }
</style>