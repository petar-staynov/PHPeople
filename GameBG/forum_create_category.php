<?php
$title = "Create Category";
include 'forum_connect.php';
include 'forum-header.php';
?>



<?php
require 'forum_connect.php';

if (isset($_SESSION['loggedin'])
    && $_SESSION['loggedin'] == true
    && $_SESSION['user_level'] = 1
    || $_SESSION['user_level'] = 2)
{
//    If user is logged in and is an admin or moderator, he gets a category add field
        echo '
        <form method="post" action=""><br>
        Category name: <input type="text" name="cat_name"/><br>
        Category description: <textarea name="cat_description"/></textarea><br>
        <input type="submit" value="Add category" />
        </form>';

//    Sends category forms text to DB
    if(isset($_POST["cat_name"]) && isset($_POST["cat_description"])) {
        $cat_name = $_POST['cat_name'];
        $cat_description = $_POST['cat_description'];

        $sql = 'INSERT INTO forum_categories (cat_name, cat_description) 
        VALUES ("'.$cat_name.'", "'.$cat_description.'"';

    }

        $result = mysqli_query($con, $sql);
        if (!$result)
        {
            echo 'Error' . mysqli_error();
        }
        else
            {
            echo 'New category successfully added.';
        }
    }
else
{
  echo 'YOU ARE NOT AN ADMIN, GET OUT';
}