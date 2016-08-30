<?php
include 'forum-header.php';

//first select the category based on $_GET['cat_id']
require 'forum_connect.php';
$sql = "SELECT cat_id, cat_name, cat_description FROM forum_categories WHERE cat_id ='" . mysqli_real_escape_string($con, $_GET['id']) . "';

$result = mysqli_query($con, $sql);

if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysqli_error($con);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This category does not exist.';
    }
    else
    {

        
        //do a query for the topics
        $sql = "SELECT topic_id, topic_subject, topic_date, topic_cat FROM forum_topics WHERE topic_id ='" . mysqli_real_escape_string($con, $_GET['id']) . "';

        $result = mysqli_query($con, $sql);

        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Topic</th>
                        <th>Created at</th>
                      </tr>';

                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>';
                    echo '<td class="leftpart">';
                    echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
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