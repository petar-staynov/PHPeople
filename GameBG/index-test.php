<?php
    include_once 'chat.php';
?>

<?php
    include_once 'header.php';
    $title = "Home";
?>


<body>
<link rel="stylesheet" href="styles/home-content.css" type="text/css">

<div class="home-content-container">
    <div class="home-recent-news">
        <h2 class="home-title">Гейминг Новини</h2>
        <div class="home-get-news">
            Script that pulls latest blog posts
        </div>
    </div>

    <div class="home-popular-games">
        <h2 class="home-title">Най-популярни игри</h2>
        <div class="home-get-games"
             Script that pulls popular games
    </div>
    <div class="recent-forum-posts">
        <h2 class="home-title">Последно във форума</h2>
        <div class="home-get-forum"
             Script that pulls latest forum posts
    </div>
</div>
</body>

<?php
include_once 'footer.php';
?>

<!--Pesho:-->
<!--Let's move the footer content to contacts-->
