<?php
$db_host = 'localhost';
$db_name = 'excelsio_db';
$db_username = 'excelsio_db';
$db_password = ')2_Whb_POiL9';
$connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$connect) {
    die("Connection Failed: ");
}
?>