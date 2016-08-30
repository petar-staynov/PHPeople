<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'gamebg';

$con = mysqli_connect("localhost", "root", "");

if (!mysqli_connect($server, $username, $password))
{
    exit('Error: could not connect to server');
}
if (!mysqli_select_db($con, $database))
{
    exit('Error: Could not select database');
}
?>