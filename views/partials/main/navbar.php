<nav>
    <?php

    include 'db-con.php';
    include_once 'api/global_functions.php';

?>
    <div class="logo">
        <h4>Learning Spy</h4>
    </div>

    <ul class="nav-links">
        <li onclick="  window.location.href='./'">
            <a href="./">
                Tutorials
        </li>
        </a>

        <li>
            <a href="./courses-list">
                Questions
            </a>
        </li>
        <li>
            <a href="#" class="activ-modal">
                Signin
            </a>
        </li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>

<script src="public/js/nav.js"></script>