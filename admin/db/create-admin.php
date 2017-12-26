<?php
require_once("../db/mysql.php");

// sql to create table
$mem = "CREATE TABLE members (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(32) NOT NULL,
  email VARCHAR(255) NOT NULL,
  urls VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  birthday VARCHAR(255) NOT NULL,
  admin INT(1) NOT NULL DEFAULT 1
) ENGINE = MYISAM";

$admin = "INSERT INTO members(
id,
username,
password,
email,
urls,
name,
birthday,
admin
) VALUES (
NULL,
'admin',
md5('123456'),
'chien@excelsiorvn.ml',
'excelsiorvn.ml',
'Nguyen Quang Chien',
'24/06/1996',
'2'
)";

if (mysqli_query($connect, $mem)) {
    echo 'Table has created successfully';
} else {
    echo 'Error creating table: '.mysqli_error($connect);
}

if (mysqli_query($connect, $admin)) {
    echo '<br>'.'Data admin has created successfully';
} else {
    echo '<br>'.'Error creating data admin'.mysqli_error($connect);
}
?>
