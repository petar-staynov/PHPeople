<?php
$title = "Edit";
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
        $statement = $connection->query('SELECT * FROM posts WHERE id = ' . $id . '');
        $row = $statement->fetch_assoc();
        ?>
        <?php if ($_SESSION['user_id'] == $row['author_id'] || $_SESSION['username'] == "admin") { ?>
            <html>
            <head>
                <meta charset="UTF-8">
                <title>Create Post</title>
            </head>
            <body>
            <form method="post">
                <h2 class="text-font">Заглавие:</h2>
                <div class="forms">
                    <input type="text" name="post_title" value="<?= $row['title'] ?>">
                </div>
                <h2 class="text-font">Съдържание:</h2>
                <div class="forms">
                    <textarea name="post_content" rows="10"><?= $row['content'] ?></textarea>
                </div>
                <h2 class="text-font">Таг:</h2>
                <div class="forms">
                    <select name="tag"/>
                    <option>PC GAMING</option>
                    <option>CONSOLE GAMING</option>
                    <option>MOBILE GAMING</option>
                    </select>
                </div>
                <div class="buttons-size">
                    <div class="forms">
                        <input type="submit" VALUE="Редактирай" name="edit">
                        <a href="blog.php" class="cancel-buttons">[Откажи]</a>
                    </div>
                </div>
            </form>
            </body>
            </html>
            <?php if (isset($_POST['edit'])) {
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
        else {header('Location: blog.php'); die;}
    }
    else {
        header('Location: blog.php');
        die;
    }
    ?>

    </body>
    </html>
<?php include_once 'footer.php'?>