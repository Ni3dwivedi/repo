<?php
session_start();
$un = $_SESSION['sid'];
if(empty($un))
{
	header("location:index.php");
}
?>
<h1>Welcome : <?php echo $un; ?></h1>

<a href="logout.php">Logout</a>