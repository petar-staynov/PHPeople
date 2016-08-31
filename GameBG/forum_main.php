<?php
$title = "GameBG Forum";
include_once 'header.php';
include 'forum_connect.php';
?>

<link rel="stylesheet" href="styles/forum-style.css" type="text/css">
<div class="forum-wrapper">
    <div class="forum-menu">
        <a class="item" href="forum_main.php">Forum Home</a>

        <!-- Shows Create topic if logged in -->
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo ' - <a class="item" href="forum_create_topic.php">Create Topic</a>';

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
    <div class="forum-content">
        <?php
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

//                draws topics
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>';
                    echo '<td class="leftpart">';
                    echo '<h3><a href="forum_category.php?id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                    if (isset($_SESSION['user_level'])&& $_SESSION['user_level'] != 0)
                    {
                        echo '<br> <a class="item-admin" href="forum_delete_category.php?id=' . $row['cat_id'] . '">Delete Category </a>';
                    }
                    echo '</td>';
                    echo '<td class="rightpart">';

                    //get the last topic for each category
                    $topicsql = "SELECT topic_id, topic_subject, topic_date, topic_cat
								FROM forum_topics WHERE topic_cat = " . $row['cat_id'] . " ORDER BY topic_date DESC LIMIT 1";

                    $topicsresult = mysqli_query($con, $topicsql);

                    if(!$topicsresult)
                    {
                        echo 'Last topic could not be displayed.';
                    }
                    else
                    {
                        if(mysqli_num_rows($topicsresult) == 0)
                        {
                            echo 'no topics';
                        }
                        else
                        {
                            while($topicrow = mysqli_fetch_assoc($topicsresult))
                                echo '<a href="forum_topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a><br>' . date('d-m-Y', strtotime($topicrow['topic_date']));
                        }
                    }
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
