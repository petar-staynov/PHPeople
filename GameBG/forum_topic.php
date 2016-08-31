<?php
include 'forum_connect.php';
include 'forum-header.php';
?>

<div class="forum-wrapper">
    <div class="forum-content">
<?php

$sql = "SELECT
			topic_id,
			topic_subject
		FROM
			forum_topics
		WHERE
			forum_topics.topic_id = '" . mysqli_real_escape_string($con, $_GET['id']) . "'";

$result = mysqli_query($con, $sql);

if(!$result)
{
    echo 'The topic could not be displayed, please try again later.' . mysqli_error($con);
}
else
{
    if (mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
        while($row = mysqli_fetch_assoc($result))
        {
            //display post data
            echo '<table class="topic" border="1">
					<tr>
						<th colspan="2">' . $row['topic_subject'] . '</th>
					</tr>';

            //fetch the posts from the database
            $posts_sql = "SELECT
						forum_posts.post_topic,
						forum_posts.post_content,
						forum_posts.post_date,
						forum_posts.post_by,
						users.user_id,
						users.username,
						forum_posts.post_id
					FROM
						forum_posts
					LEFT JOIN
						users
					ON
						forum_posts.post_by = users.user_id
					WHERE
						forum_posts.post_topic = '" . mysqli_real_escape_string($con, $_GET['id']) . "'";

            $posts_result = mysqli_query($con, $posts_sql);

            if(!$posts_result)
            {
                echo '<tr><td>The posts could not be displayed, please try again later. ' . mysqli_error($con) . '<tr></td></table>';
            }
            else
            {

                while($posts_row = mysqli_fetch_assoc($posts_result))
                {
                    echo '<tr class="topic-post">';
					echo '<td class="user-post">' . $posts_row['username'] . '<br/>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</td>';
                    if (isset($_SESSION['user_level'])&& $_SESSION['user_level'] != 0)
                    {
                        echo '<td class="post-content">';
                        echo '<a class="none">' . htmlentities(stripslashes($posts_row['post_content'])) . '</a>';
                        echo '<a><a class="item-admin" style="float: right" href="forum_delete_reply.php?id=' . $posts_row['post_id'] . '">Delete Reply</a>';
                        echo '</td>';
                    }
                    else
                    {
                        echo '<td class="post-content">' . htmlentities(stripslashes($posts_row['post_content'])) . '</td>';
                    }
					echo '</tr>';

                }
            }

            if (!isset($_SESSION['loggedin']))
            {
                echo '<tr><td colspan=2>Sign in to reply to this topic';
            }
            else
            {
                //draw reply box
                echo '<tr><td colspan="2"><h2>Reply:</h2><br />
					    <form method="post" action="forum_reply.php?id=' . $row['topic_id'] . '">
						<textarea name="reply-content"></textarea><br /><br />
						<input type="submit" value="Submit reply" />
					</form></td></tr>';
            }

            echo '</table>';
        }
    }
}
    ?>
    </div>
</div>
