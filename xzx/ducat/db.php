<?php 
$user = "root";
$pass = "";
$db="user_information";

$db = new mysqli('localhost', $user, $pass , $db);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully";
?>