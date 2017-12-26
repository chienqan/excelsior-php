<?php
require_once("../db/mysql.php");

$query = "DROP TABLE members";

if (mysqli_query($connect,$query)) {
    echo "Your table has deleted successfully";
} else {
    echo "Error deleting table".mysqli_error($connect);
}