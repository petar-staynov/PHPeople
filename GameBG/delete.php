<?php
$title = "Delete";
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
        <h1>Are you sure you want to delete this post?</h1>
        <div>Title:</div>
        <input type="text" name="post_title" value = "<?=$row['title']?>" /disabled>
        <div>Content:</div>
        <textarea name="post_content" rows="10"/disabled><?=$row['content']?></textarea>
        <div>Tag:</div>
        <div>
            <select name="tag" disabled/>
                <option><?=$row['tag']?></option>
                <option>CONSOLE GAMING</option>
                <option>MOBILE GAMING</option>
            </select>
        </div>
        <div>
            <input type="submit" VALUE="Delete" name="delete">
            <a href="blog.php">[Cancel]</a>
        </div>
    </form>
    </body>
    </html>
    <?php if(isset($_POST['delete'])) {
        $statement = $connection->prepare('DELETE FROM posts WHERE id = ' . $id . '');
        $statement->execute();
        header('Location: blog.php');
        die();
    }
}
?>
<?php include_once 'footer.php'?>
