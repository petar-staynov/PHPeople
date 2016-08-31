
<?php
$title = "Home";
include_once 'header.php';
?>

<?php
require 'connection.php';
//require 'forum_connect.php';

$statement = $connection->query('SELECT * FROM posts ORDER BY date DESC LIMIT 3');
$statement->fetch_all(MYSQLI_ASSOC);
function cutLongText($text,  $maxSize=100,  $htmlEscape = true)
{
    $append = '';
    if (strlen($text) > $maxSize) {
        $text = substr($text, 0, $maxSize);
        $append = '&hellip;';
    }
    if ($htmlEscape)
        $text = htmlspecialchars($text);
    return $text . $append;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="blog">
<div class="home-content-container">
    <div class="home-recent-news">
        <h2 class="home-title">Последни новини</h2>

        <div class="home-news">
                    <?php
                    foreach($statement as $post) : ;?>
                        <a style="display:block" href="details.php?id=<?=$post['id']?>">
                            <div class="news-title"><?=htmlspecialchars($post['title'])?></div>
                            <div class="news-text"><?=cutLongText($post['content'])?></div>
                        </a>
                    <?php endforeach ?>
        </div>
    </div>

    <div class="home-popular-games">
        <h2 class="home-title">Най-популярни игри</h2>
        <div class="home-get-games">
            <div class="home-game-container">
            <?php
                require 'connection.php';

                $sql = 'SELECT * FROM games LIMIT 3';


            $query = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($query)) { ?>
                
                    <div class="home-game-holder">
                       
                           <div class="home-game">
                            <a href="single-game.php?id=<?= $row['id'] ?>">
                               <div class="game-image-holder">
                                   <img src="admin/game-images/<?= $row['game_image'] ?>">
                               </div>
                               <h1><?= $row['game_title'] ?></h1>
                               </a>
                           </div> 
                       
                    </div>
                
            <?php	}
            ?>
            </div>
        </div>
    </div>
    <div class="recent-forum-posts">
        <h2 class="home-title">Последни теми във форума</h2>
        <div class="home-get-forum">
            <!-- Script that pulls latest forum posts -->
        </div>
    </div>
</div>
</body>
</html>
<?php
    include_once 'footer.php';
?>
