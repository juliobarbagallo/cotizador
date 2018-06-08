<?php
$connection = mysqli_connect('localhost', 'root', 'new14you');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'cruz');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>
