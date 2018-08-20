<?php
session_start();
//session_destroy();
unset($_SESSION['sid']);

header("location:index.php");

?>