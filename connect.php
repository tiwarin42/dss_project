<?php
$hostname_db = "localhost";
$userid_db = "root";
$userpwd_db = "";
$db_name = "tourism_location";
$conn = mysqli_connect($hostname_db, $userid_db, $userpwd_db, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
else {echo "";}
?>
