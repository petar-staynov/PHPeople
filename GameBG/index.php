
<?php
$title = "Home";
include_once 'header.php';
?>

<?php
require 'connection.php';
//require 'forum_connect.php';

$statement = $connection->query('SELECT * FROM posts ORDER BY date DESC');
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
        <h2 class="home-title">Последни новини (показва 3)</h2>
        <div class="home-get-news">
                <table>
                    <?php
                    foreach($statement as $post) :
                        ;?>
                        <tr>
                            <td><?=htmlspecialchars($post['title'])?></td>
                        </tr>
                        <tr>
                            <td><?=cutLongText($post['content'])?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
    </div>

    <div class="home-popular-games">
        <h2 class="home-title">Най-популярни игри (показва 3)</h2>
        <div class="home-get-games">
            <?php

            if (isset($_GET['play'])) {
                $play = $_GET['play'];

                $sqlCheck = 'SELECT * FROM games WHERE device = "'.$play.'" OR device = "all"';
            }

            else {
                $sqlCheck = 'SELECT * FROM games';
            }

            $queryCheck = mysqli_query($connection, $sqlCheck);
            $allRows = mysqli_num_rows($queryCheck);
            $pages = ceil($allRows / 12);

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }

            else {
                $page = 1;
            }

            $start_from = ($page - 1) * 12;

            if (isset($_GET['play'])) {
                $play = $_GET['play'];

                if ($play != "all") {
                    $sql = 'SELECT * FROM games WHERE device = "'.$play.'" OR device = "all" LIMIT '.$start_from.', 12';
                }

                else {
                    $sql = "SELECT * FROM games LIMIT $start_from, 12";
                }
            }

            else {
                $sql = "SELECT * FROM games LIMIT $start_from, 12";
            }

            $query = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($query)) { ?>
                <div class="single-game">
                    <div class="game-container">
                        <a href="single-game.php?id=<?= $row['id']; ?>">
                            <div class="game-image">
                                <img src="admin/game-images/<?= $row['game_image']; ?>">
                            </div>
                            <div class="game-title">
                                <h2><?= $row['game_title']; ?></h2>
                            </div>
                        </a>
                    </div>
                </div>
            <?php	}
            ?>
            <div class="page-holder">
                <?php	for ($i=1; $i <= $pages; $i++) { ?>
                    <a href="games.php?page=<?=$i?>"><?=$i?></a>
                <?php	}
                ?>
            </div>
        </div>
    </div>
    <div class="recent-forum-posts">
        <h2 class="home-title">Последно във форума</h2>
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
