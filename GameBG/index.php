
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
                            <div class="home-news-title"><?=htmlspecialchars($post['title'])?></div>
                            <div class="home-news-text"><?=cutLongText($post['content'])?></div>
                        </a>
                    <?php endforeach ?>
        </div>
    </div>

    <div class="home-popular-games">
        <h2 class="home-title">Най-нови игри</h2>
        <div class="home-get-games">
            <div class="home-game-container">
            <?php
                require 'connection.php';

                $sql = 'SELECT * FROM games ORDER BY time_added DESC LIMIT 3';


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
            <?php
            require 'forum_connect.php';
            $sql = 'SELECT topic_id, topic_subject FROM forum_topics ORDER BY topic_date DESC LIMIT 3';
            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($query)) { ?>
                <div class="home-forum-topic">
                    <a style="display:block" href="forum_topic.php?id=<?=$row['topic_id']?>">
                        <div class="forum-home-title"><?=htmlspecialchars($row['topic_subject'])?></div>
                    </a>
                </div>
            <?php	}
            ?>
        </div>
    </div>
    <div class="clearfix">
        
    </div>
</div>
<?php
include_once 'footer.php';
?>
