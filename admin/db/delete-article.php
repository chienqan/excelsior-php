<?php
require_once("../db/mysql.php");

$del = "DROP TABLE articles";
$query = mysqli_query($connect, $del);
if ($query) {
  echo 'Successful';
} else {
  echo 'Failed';
}
?>