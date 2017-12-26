<?php
require_once("../db/mysql.php");

$article = "CREATE TABLE articles(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
url VARCHAR(255) NOT NULL,
content TEXT NOT NULL,
time TIMESTAMP
)";

$query = mysqli_query($connect, $article);
if ($query) {
  echo 'Table created successfully';
} else {
  echo 'Failed to create table'.mysqli_error($con);
}
?>