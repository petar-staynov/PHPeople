<?php
$title = "Forum";
include 'forum-header.php';
?>

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
            echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
            echo '</td>';
            echo '</tr>';
        }
    }
}
?>
