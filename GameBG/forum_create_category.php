<?php
include 'forum_main.php';
?>

<?php
require 'forum_connect.php';

//    Checks if user is logged in and is an admin or moderator, he gets a category add field
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user_level'] = 1 || $_SESSION['user_level'] = 2) {
    {
//       displays the form
        echo '<form method="post" action="">
            Category name: <br/>
            <input type="text" name="cat_name" /><br/>
            Category description: <br/>
            <textarea name="cat_description" /></textarea>
            <br/>
            <input type="submit" value="Add category" />
            </form>';
        echo '<p style="margin-bottom: 20px">';

//    Sends category forms text to DB
        if (isset($_POST["cat_name"]) && isset($_POST["cat_description"])) {
            $cat_name = $_POST['cat_name'];
            $cat_description = $_POST['cat_description'];

//          $sql = "INSERT INTO forum_categories(cat_name, cat_description) VALUES ('$cat_name', '$cat_description')";
            $sql = "INSERT INTO forum_categories(cat_name, cat_description) VALUES ('$cat_name', '$cat_description')";

            $result = mysqli_query($con, $sql);
            if (!$result) {
                echo 'Error' . mysqli_error($con);
            } else {
                echo 'New category successfully added.';
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }
    }
}
else
{
    echo 'YOU ARE NOT AN ADMIN, GET OUT';
    echo '<p style="margin-bottom: 20px">';
}


