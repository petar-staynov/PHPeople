<?php
include 'header.php';
include 'forum-header.php';
include 'forum_connect.php';

$title = "Home";
?>

<?php
echo '<h3>Sign in</h3>';

if (isset($_SESSION['signed_in']) && ($_SESSION['signed_in'] == true))
{
    echo 'You have already signed in. Try <a href="signout.php">signing out</a>.';
}

else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        echo '<form method="post" action="">
            Username: <input type="text" name="user_name" />
            Password: <input type="password" name="user_pass">
            <input type="submit" value="Sign in" />
         </form>';
    }
}

