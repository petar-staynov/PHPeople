<?php
$title = "Create Post";
include_once 'header.php';
include_once 'connection.php';
if(!isset($_SESSION))
{
    session_start();
}
?>
<?php
if($_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2) { ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Create Post</title>
    </head>
    <body>
    <form method="post">
        <h2>Title:</h2>
        <input type="text" name="post_title"/>
        <h2>Content:</h2>
        <textarea name="post_content" rows="10"></textarea>
        <h2>Tag:</h2>
        <div>
            <select name="tag">
                <option value="PC GAMING">PC GAMING</option>
                <option value="CONSOLE GAMING">CONSOLE GAMING</option>
                <option value="MOBILE GAMING">MOBILE GAMING</option>
            </select>
        </div>
        <div class="buttons-size">
            <input type="submit" VALUE="Create" name="create">
            <a href="blog.php">[Cancel]</a>
        </div>
    </form>
    </body>
    </html>
    <?php
    $errors = false;
    if (isset($_POST['post_title']) && isset($_POST['post_content']) && isset($_POST['post_title']) && isset($_POST['tag'])) {
        if (!empty($_POST['post_title'])) {
            $title = $_POST['post_title'];
            if (strlen($title) < 1 || strlen($title) >= 150) {
                $errors = true;
                echo $titleError = "The title must be between 1 and 150 letters.<br>";
            } else {
                $errors = false;
            }
        } else {
            echo $titleError = "Please enter a title.<br>";
            $errors = true;
        }
        if(isset($_POST['create'])) {
            $content = $_POST['post_content'];
            $tag = $_POST['tag'];
            $userID = $_SESSION['user_id'];
            $statement = $connection->prepare('INSERT INTO posts (title, content, tag, author_id) VALUES (?,?,?,?)');
            $statement->bind_param("sssi", $title, $content, $tag, $userID);
            $statement->execute();
            header('Location: blog.php');
            die();
        }
    }
}
else {
    header('Location: index.php');
}
?>
<?php include_once 'footer.php'?>


