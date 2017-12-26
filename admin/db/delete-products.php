<?php
require_once("../db/mysql.php");

$del = "DROP TABLE products";
$query = mysqli_query($connect, $del);
if ($query) {
    echo 'Table products has dropped succesfully';
} else {
    echo 'Failed'.mysqli_error($connect);
}
?>