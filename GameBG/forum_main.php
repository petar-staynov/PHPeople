<?php
$title = "Forum";
include_once 'header.php';
?>

<link rel="stylesheet" href="styles/forum-style.css" type="text/css">
<div class="forum-wrapper">
    <div class="forum-menu">
        <a class="item" href="forum_main.php">Forum Home</a> -

        <!-- Shows Create topic and leave reply if logged in -->
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<a class="item" href="forum_create_topic.php">Create Topic</a> - 
                  <a class="item" href="forum_create_reply.php">Leave Reply</a> - ';

            if($_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2)
            {
                echo '<a class="item-admin" href="forum_create_category.php">Create Category</a>';
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
    <div class="forum-content">
        <?php
        require 'forum_connect.php';
        $sql = "SELECT cat_id, cat_name, cat_description FROM forum_categories";

        $result = mysqli_query($con, $sql);

        if(!$result)
        {
            echo 'The categories could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'Forum has no categories';
            }
            else
            {
                echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Last topic</th>
              </tr>';

                //TODO FIX THIS
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>';
                    echo '<td class="leftpart">';
                    echo '<h3><a href="forum_category.php?id=' . $row['cat_id'] . '">' . $row['cat_name']  .'</a><h3>';
                    echo '<a class="forum-cat-desc">' . $row['cat_description'] . '</a>';
                    echo '</td>';
                    echo '<td class="rightpart">';
                    echo '<a href="forum_topic.php?id="> TOPIC NAME </a> DATE';
                    echo '</td>';
                    echo '</tr>';
                }
            }
        }
        ?>
    </div>
</div>

<?php
include_once 'footer.php';
?>
