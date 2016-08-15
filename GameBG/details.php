<?php
include_once 'header.php';
include_once 'connection.php';
session_start();
?>
<?php
$id = $_GET['id'];
$statement = $connection->query('SELECT * FROM posts WHERE id = '.$id.'');
$row = $statement->fetch_assoc();
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
        <tr>
            <td><?=$row['id']?></td>
            <td><?=htmlspecialchars($row['title'])?></td>
            <td><?=$row['content']?></td>
            <td><?=htmlspecialchars($row['date'])?></td>
            <td><?=htmlspecialchars($row['tag'])?></td>
            <td><?=$row['author_id']?></td>
            <td><a href="blog.php">[Back to Blog]</a></td>
           <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            if($row['author_id'] == $_SESSION['user_id'] || $_SESSION['username'] == "admin") {?>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    if($row['author_id'] == $_SESSION['user_id'] || $_SESSION['username'] == "admin") {?>
                        <td><a href="#">[Edit]</a></td>
                        <td><a href="delete.php?id=<?=$row['id']?>">[Delete]</a></td>
                    <?php }
                }?>
            <?php }}?>
        </tr>
</table>
<?php include_once 'footer.php' ?>
