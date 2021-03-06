<?php
$title = "Create Topic";
include 'forum_main.php';
?>

<?php
require 'forum_connect.php';

echo '<h2>Create a topic</h2>';

if($_SESSION['loggedin'] == false)
{
    echo 'Sign in to post';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        $sql = "SELECT cat_id, cat_name, cat_description FROM forum_categories";
        $result = mysqli_query($con, $sql);

        if(!$result)
        {
            echo'Error parsing categories from DB' . mysqli_error($con);
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no categories to make a topic in';
            }
            else
            {
                echo '<form method="post" action="">
                       Subject: <br />
                       <input type="text" name="topic_subject" /><br />
                       Category:<br />';

                echo '<select name="topic_cat"><br />';
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                }

//                DRAWS INPUT BOX
                echo '</select><br />';
                echo 'Message: <br />
                        <textarea name="post_content" /></textarea><br />
                      <input type="submit" value="Create topic" />
                      </form>';
                echo '<p style="margin-bottom: 20px">';

            }
        }
    }
    else
    {
        $query = "BEGIN WORK;";
        $result = mysqli_query($con, $query);

        if(!$result)
        {
            echo'An error occured while creating your topic' . mysqli_error($con);
        }
        else
        {
//            $sql = "INSERT INTO forum_topics(topic_subject, topic_date, topic_cat, topic_by) VALUES ('$topic_subject', NOW(), '$topic_cat'), '$user_id'";

            $sql = "INSERT INTO forum_topics(topic_subject, topic_date, topic_cat, topic_by)
VALUES('" . mysqli_real_escape_string($con, $_POST['topic_subject']) . "', NOW(), " . mysqli_real_escape_string($con, $_POST['topic_cat']) . ", " . $_SESSION['user_id'] . ")";

            $result = mysqli_query($con, $sql);
            if(!$result)
            {
                echo 'An error occured writing your data' . mysqli_error($con);
                $sql = "ROLLBACK";
                $result = mysqli_query($con, $sql);
            }
            else
            {
                $topicid = mysqli_insert_id($con);
//                $sql = "INSERT INTO forum_posts(post_content, post_date, post_topic, post_by) VALUES ('$post_content', NOW(), '$topicid'), '$user_id'";
                $sql = "INSERT INTO forum_posts(post_content, post_date, post_topic, post_by)
VALUES ('" . mysqli_real_escape_string($con, $_POST['post_content']) . "', NOW(), ". $topicid . ", " . $_SESSION['user_id'] .")";
            }
            $result = mysqli_query($con, $sql);

            if (!$result)
            {
                echo 'An error occured writing your post data' , mysqli_error($con);
            }
            else
            {
                $sql = "COMMIT;";
                $result = mysqli_query($con, $sql);
                echo 'You have created <a href="forum_topic.php?id='. $topicid . '">your new topic</a>.';
            }
        }
    }
}
?>
