<?php
$title = "Mobile Gaming";
include_once 'header.php';
session_start();
?>
<?php
require_once('connection.php');
$statement = $connection->query('SELECT * FROM posts WHERE posts.tag = "MOBILE GAMING" ORDER BY date DESC');
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
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <td>Tag</td>
        <td>Author ID</td>
        <th>Action</th>
    </tr>
    <?php foreach($statement as $post) :
        $userstatement = $connection->query('SELECT * FROM users WHERE users.user_id = '.$post['author_id'].'');
        $user = $userstatement->fetch_assoc();?>
        <tr>
            <td><?=$post['id']?></td>
            <td><?=htmlspecialchars($post['title'])?></td>
            <td><?=cutLongText($post['content'])?></td>
            <td><?=htmlspecialchars($post['date'])?></td>
            <td><?=htmlspecialchars($post['tag'])?></td>
            <td><?=htmlspecialchars($user['username'])?></td>
            <td><a href="details.php?id=<?=$post['id']?>" name="details">[Details]</a></td>
            <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                if($post['author_id'] == $_SESSION['user_id'] || $_SESSION['username'] == "admin") {?>
                    <td><a href="edit.php?id=<?=$post['id']?>">[Edit]</a></td>
                    <td><a href="delete.php?id=<?=$post['id']?>">[Delete]</a></td>
                <?php }
            }?>
        </tr>
    <?php endforeach ?>
</table>
<?php
include_once 'footer.php';
?>
