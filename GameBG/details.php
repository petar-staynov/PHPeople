<?php
$title = "Details";
include_once 'header.php';
include_once 'connection.php';
if(!isset($_SESSION))
{
    session_start();
}?>
<?php
$id = $_GET['id'];
$statement = $connection->query('SELECT * FROM posts WHERE id = '.$id.'');
$row = $statement->fetch_assoc();
?>
<table>
    <tr>
        <th>Залгавие</th>
        <th>Съдържание</th>
        <th>Дата</th>
        <td>Таг</td>
        <th>Опции</th>
    </tr>
        <tr>
            <td><?=htmlspecialchars($row['title'])?></td>
            <td><?=htmlspecialchars($row['content'])?></td>
            <td><?=htmlspecialchars($row['date'])?></td>
            <td><?=htmlspecialchars($row['tag'])?></td>
            <td><a href="blog.php">[Към блога]</a></td>
           <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            if($row['author_id'] == $_SESSION['user_id'] && $_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2) {?>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    if($row['author_id'] == $_SESSION['user_id'] || $_SESSION['username'] == "admin") {?>
                        <td><a href="edit.php?id=<?=$row['id']?>">[Edit]</a></td>
                        <td><a href="delete.php?id=<?=$row['id']?>">[Delete]</a></td>
                    <?php }
                }?>
            <?php }}?>
        </tr>
</table>
<?php include_once 'footer.php' ?>
