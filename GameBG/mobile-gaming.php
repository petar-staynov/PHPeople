<?php
include_once 'header.php';
?>
<?php
require_once('connection.php');
$statement = $connection->query('SELECT * FROM posts WHERE posts.tag = "MOBILE GAMING" ORDER BY date DESC');
$statement->fetch_all(MYSQLI_ASSOC);
function cutLongText($text,  $maxSize=200,  $htmlEscape = true)
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
<?php foreach($statement as $post) :?>
    <tr>
        <td><?=$post['id']?></td>
        <td><?=htmlspecialchars($post['title'])?></td>
        <td><?=cutLongText($post['content'])?></td>
        <td><?=htmlspecialchars($post['date'])?></td>
        <td><?=htmlspecialchars($post['tag'])?></td>
        <td><?=$post['author_id']?></td>
        <td><a href="GameBG/posts/edit/<?=$post['id']?>">[Edit]</a>
            <a href="GameBG/posts/delete/<?=$post['id']?>">[Delete]</a>
        </td>
    </tr>
<?php endforeach ?>
<?php
include_once 'footer.php';
?>
