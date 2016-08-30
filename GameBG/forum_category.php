<?php
include 'forum-header.php';

//first select the category based on $_GET['cat_id']
require 'forum_connect.php';
$sql = "SELECT cat_id, cat_name, cat_description FROM forum_categories WHERE cat_id = '" . mysqli_real_escape_string($con, $_GET['id']) . "'";
$result = mysqli_query($con, $sql);

if (!$result)
{
    echo 'Error displaying the category' . mysqli_error($con);
}
else
{
    if (mysqli_num_rows($result) == 0)
    {
        echo 'This category does not exist';
    }
    else
    {
        //Display category data
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Topics in ' . $row['cat_name'] . '</h2>';
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