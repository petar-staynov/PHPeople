<?php
$title = "Forum";
include 'forum-header.php';
?>

<?php
require 'forum_connect.php';
$sql = "SELECT cat_id, cat_name, cat_description FROM forum_categories";

//FIX THIS
$result = mysqli_query($con, $sql);

if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        //prepare the table
        echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Last topic</th>
              </tr>';

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
            echo '<td class="leftpart">';
            echo '<h3><a href="forum_category.php?id">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
            echo '</td>';
            echo '<td class="rightpart">';
            echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
            echo '</td>';
            echo '</tr>';
        }
    }
}
?>

<?php
include 'forum_footer.php';
?>
