<?php
$title = "Delete";
include_once 'header.php';
include_once 'connection.php';
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body class="blog">
<?php
if($_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2) {
    $id = $_GET['id'];
    $statement = $connection->query('SELECT * FROM posts WHERE id = '.$id.'');
    $row = $statement->fetch_assoc();
    ?>
    <?php if ($_SESSION['user_id'] == $row['author_id'] || $_SESSION['username'] == "admin") { ?>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Create Post</title>
        </head>
        <body>
        <form method="post"
        ">
        <h1 class="text-font">Сигурен ли си, че искаш да изтриеш този пост?</h1>
        <h2 class="text-font">Заглавие:</h2>
        <div class="forms" >
        <input class="forms" type="text" name="post_title" value="<?= $row['title'] ?>" /disabled>
        </div>
        <h2 class="text-font">Съдържание:</h2>
        <div class="forms" >
        <textarea class="forms"  name="post_content" rows="10"/disabled><?= $row['content'] ?></textarea>
        </div>
        <h2 class="text-font">Таг:</h2>

        <div class="forms" >
            <select class="select-buttons" name="tag" disabled/>
            <option><?= $row['tag'] ?></option>
            <option>CONSOLE GAMING</option>
            <option>MOBILE GAMING</option>
            </select>
        </div>
        <div class="buttons-size">
            <div class="forms">
                <input type="submit" VALUE="Изтрий" name="delete">
                <a class="cancel-buttons" href="blog.php">[Откажи]</a>
            </div>
        </div>
        </form>
        </body>
        </html>
        <?php if (isset($_POST['delete'])) {
            $statement = $connection->prepare('DELETE FROM posts WHERE id = ' . $id . '');
            $statement->execute();
            header('Location: blog.php');
            die();
        }
    }
    else{ header('Location: blog.php'); die;}
}
else {
    header('Location: blog.php');
}
?>
</body>
</html>

<?php include_once 'footer.php'?>
