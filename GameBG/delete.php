<?php
$title = "Delete";
include_once 'header.php';
include_once 'connection.php';
?>
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
        <h1>Are you sure you want to delete this post?</h1>
        <h2>Title:</h2>
        <input type="text" name="post_title" value="<?= $row['title'] ?>" /disabled>
        <h2>Content:</h2>
        <textarea name="post_content" rows="10"/disabled><?= $row['content'] ?></textarea>
        <h2>Tag:</h2>
        <div>
            <select name="tag" disabled/>
            <option><?= $row['tag'] ?></option>
            <option>CONSOLE GAMING</option>
            <option>MOBILE GAMING</option>
            </select>
        </div>
        <div class="buttons-size">
            <input type="submit" VALUE="Delete" name="delete">
            <a href="blog.php">[Cancel]</a>
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
<?php include_once 'footer.php'?>
