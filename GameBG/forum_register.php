<?php
include 'header.php';
?>

<?php
	require 'connection.php';

	if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
        //Get the user input from the form
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Defense
        $email = mysqli_real_escape_string($connection, $email);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //Hash the password
        $password = md5($password);

        //Check if the email or the username already exist
        $sql_check = 'SELECT * FROM users WHERE email = "'.$email.'" OR username = "'.$username.'"';

        $query = mysqli_query($connection, $sql_check);

        if (mysqli_num_rows($query) >= 1) {
            header("Location: login-form.php?reg-error=0");
        }

        //If email or username does not exist register the user
        else {
            $sql = 'INSERT INTO users (email, username, password, date_registered) VALUES ("'.$email.'", "'.$username.'", "'.$password.'", NOW())';

            if (!mysqli_query($connection, $sql)) {
                header('Location: login-form.php?reg-error=1');
            }

            else {
                header('Location: index.php');
            }
        }
    }
?>
