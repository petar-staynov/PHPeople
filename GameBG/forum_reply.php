<?php
include 'forum_connect.php';
include 'header.php';
include 'forum_main.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo 'You can not access the forum this way';
}
else
{
    if(!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'])
    {
        echo 'You must be signed in to reply.';
    }
    else
    {
        $sql = "INSERT INTO forum_posts(post_content, post_date, post_topic, post_by) 
				VALUES ('" . $_POST['reply-content'] . "', NOW(), " . mysqli_real_escape_string($con, $_GET['id']) . ", " . $_SESSION['user_id'] . ")";

        $result = mysqli_query($con, $sql);

        if(!$result)
        {
            echo 'Your reply has not been saved, please try again later.';
        }
        else
        {
            echo 'Your reply has been saved, check it <a href="forum_topic.php?id=' . htmlentities($_GET['id']) . '">HERE</a>. <br>';
        }
    }
}

include 'footer.php';
?>