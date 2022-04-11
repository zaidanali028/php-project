<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/tut-responsive.js"></script>
<script src="public/js/modal.js"></script>


<footer>
<div class="footer-content">
<h3>Awesome Portal By Awesome People</h3>
<p>The passion we have as a team made this project a successful one,happy surfing.More awesome and great suff are yet to come,always check up for updates.PEACE :)</p>
</div>

<ul class="socials">
<li><a href="#"><i class="fab fa-facebook"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
 </ul>

 
</footer>



<style>

    .center-footer{
        display: flex;
        justify-content: center;
        width: 100%;
     
        background-color: black;
    }
footer{
    position: absolute;
    bottom: 110;
    left: 0;
    right: 0;
    height: auto;
    width: 90%;
    padding-top: 10px;
    color: #fff;
  border-radius: 20px;
  margin: auto;

}

.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
    color: black;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: black;
}

.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}

.socials li{
    margin: 0 10px;
}

.socials a{
    text-decoration: none;
    color: black;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;
}

.socials a i{
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;
}

.socials a:hover i{
    color: aqua;
}

</style>