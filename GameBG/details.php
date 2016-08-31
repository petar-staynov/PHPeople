<?php
$title = "Details";
include_once 'header.php';
include_once 'connection.php';
?>
<?php
$id = $_GET['id'];
$statement = $connection->query('SELECT * FROM posts WHERE id = '.$id.'');
$row = $statement->fetch_assoc();
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="blog">
<table>
    <tr>
        <th>Залгавие</th>
        <th>Съдържание</th>
        <th>Дата</th>
        <th>Таг</th>
        <th>Опции</th>
    </tr>
    <tr>
        <td><?=htmlspecialchars($row['title'])?></td>
        <td><?=htmlspecialchars($row['content'])?></td>
        <td><?=htmlspecialchars($row['date'])?></td>
        <td><?=htmlspecialchars($row['tag'])?></td>
        <td>
            <div><a class="options" href="blog.php">[Към Блога]</a></div>
            <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                if($row['author_id'] == $_SESSION['user_id'] && $_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2) {?>
                    <div><a class="options" href="edit.php?id=<?=$row['id']?>">[Редактирай]</a></div>
                    <div><a class="options" href="delete.php?id=<?=$row['id']?>">[Изтрий]</a></div>
                <?php }
            }?>
        </td>
    </tr>
</table>
</body>
</html>
<?php include_once 'footer.php' ?>
