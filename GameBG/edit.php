<?php
$title = "Edit";
include_once 'header.php';
include_once 'connection.php';
session_start();
?>
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $id = $_GET['id'];
    $statement = $connection->query('SELECT * FROM posts WHERE id = '.$id.'');
    $row = $statement->fetch_assoc();
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Create Post</title>
    </head>
    <body>
    <form method="post"">
    <div>Title:</div>
    <input type="text" name="post_title" value = "<?=$row['title']?>">
    <div>Content:</div>
    <textarea name="post_content" rows="10"><?=$row['content']?></textarea>
    <div>Tag:</div>
    <div>
        <select name="tag"/>
        <option>PC GAMING</option>
        <option>CONSOLE GAMING</option>
        <option>MOBILE GAMING</option>
        </select>
    </div>
    <div>
        <input type="submit" VALUE="Edit" name="edit">
        <a href="blog.php">[Cancel]</a>
    </div>
    </form>
    </body>
    </html>
    <?php if(isset($_POST['edit'])) {
        $title = $_POST['post_title'];
        $content = $_POST['post_content'];
        $tag = $_POST['tag'];
        $statement = $connection->prepare('UPDATE posts SET title = ?, content = ?, tag = ? WHERE id = ?');
        $statement->bind_param('sssi', $title, $content, $tag, $id);
        $statement->execute();
        header('Location: blog.php');
        die();
    }
}
else {
    header('Location: index.php');
}
?>
<?php include_once 'footer.php'?>