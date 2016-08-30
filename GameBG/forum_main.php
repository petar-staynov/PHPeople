<?php
$title = "Forum";
include 'forum_connect.php';
include 'forum-header.php';
?>

<?php
echo '<tr>';
echo '<td class="leftpart">';
echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
echo '</td>';
echo '<td class="rightpart">';
echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
echo '</td>';
echo '</tr>';
?>

<?php
include 'forum_footer.php';
?>
