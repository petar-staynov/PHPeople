<?php
$title = "GameBG Forum";
include_once 'header.php';
?>

<link rel="stylesheet" href="styles/forum-style.css" type="text/css">
<div class="forum-wrapper">
    <div class="forum-menu">
        <a class="item" href="forum_main.php">Forum Home</a>

        <!-- Shows Create topic and if logged in -->
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<a class="item" href="forum_create_topic.php">Create Topic</a>';

            if(isset($_SESSION['user_level']) && $_SESSION['user_level'] != 0)
            {
                echo ' - <a class="item-admin" href="forum_create_category.php">Create Category</a>';
            }
        }
        ?>
        <div class="forum-userbar">
            <?php
            if (isset($_SESSION['loggedin']))
            {
                echo '<a class="item-username">Hello ' . $_SESSION['username'] . '</a>';
            }
            else
            {
                echo '<a class="item-username">Please login or register</a>';
            }
            ?>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>
