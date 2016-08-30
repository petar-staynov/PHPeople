<?php
include 'forum-header.php';

require 'forum_connect.php';
$sql = "SELECT topic_id, topic_subjext FROM forum_topics WHERE topic_id = '" . mysqli_real_escape_string($con, $_GET['id']) . "'";
$result = mysqli_query($con, $sql);

if (!$result)
{
    echo 'Error displaying the topic' . mysqli_error($con);
}
else
{
    if (mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist';
    }
    else
    {
        //Display topic data
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Topics in' . $row['cat_name'] . ' category </h2>';
        }
        //Do query for the topics
        $sql = "SELECT topic_id, topic_subject, topic_date, topic_cat FROM forum_topics WHERE topic_cat = '" . mysqli_real_escape_string($con, $_GET['id']) . "'";
        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            echo 'Error displaying the topics' . mysqli_error($con);
        }
        else
        {
            if (mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category';
            }
            else
            {
                echo '<table border="1">
                        <tr>
                        <th>Topic</th>
                        <th>Created on</th>
                        </tr>';

                while ($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>';
                    echo '<td class="leftpart">';
                    echo '<h3><a href="forum_topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                    echo '</td>';
                    echo '<td class="rightpart">';
                    echo date('d-m-Y', strtotime($row['topic_date']));
                    echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}
include 'forum_footer.php';
?>