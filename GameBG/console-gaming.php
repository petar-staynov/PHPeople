<?php
$title = "Console Gaming";
include_once 'header.php';
?>
<?php
require_once('connection.php');
$statement = $connection->query('SELECT * FROM posts WHERE posts.tag = "CONSOLE GAMING" ORDER BY date DESC');
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
<table>
    <tr>
        <th>Заглавие</th>
        <th>Съдържание</th>
        <th>Дата</th>
        <th>Таг</th>
        <th>Автор</th>
        <th>Опции</th>
    </tr>
    <?php foreach($statement as $post) :
        $userstatement = $connection->query('SELECT * FROM users WHERE users.user_id = '.$post['author_id'].'');
        $user = $userstatement->fetch_assoc();?>
        <tr>
            <td><?=htmlspecialchars($post['title'])?></td>
            <td><?=cutLongText($post['content'])?></td>
            <td><?=htmlspecialchars($post['date'])?></td>
            <td><?=htmlspecialchars($post['tag'])?></td>
            <td><?=htmlspecialchars($user['username'])?></td>
            <td>
                <div><a class="options" href="details.php?id=<?=$post['id']?>" name="details">[Виж целия]</a></div>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    if($post['author_id'] == $_SESSION['user_id'] && $_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2) {?>
                        <div><a class="options" href="edit.php?id=<?=$post['id']?>">[Редактирай]</a></div>
                        <div><a class="options" href="delete.php?id=<?=$post['id']?>">[Изтрий]</a></div>
                    <?php }
                }?>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>
<?php
include_once 'footer.php';
?>
