<?php
include 'forum_connect.php';
include 'forum-header.php';
?>

<div class="forum-wrapper">
    <div class="forum-content">
<?php
if($_SESSION['user_level'] == 0)
{
    echo 'You must be an admin to do that';
}
else
{
    $id = $_GET['id'];
    $sql = "DELETE FROM forum_categories WHERE cat_id ='$_GET[id]'";

    $result = mysqli_query($con, $sql);

    if(!$result)
    {
        echo 'Could not delete the category with id ' . $id . mysqli_error($con);
    }
    else
    {
        echo 'Category with ID ' . $id .  ' deleted.';
        echo '<a href="javascript:history.go(-1)"> GO BACK</a>';
    }
}

include 'footer.php';
?>
    </div>
</div>
