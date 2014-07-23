<?php
require 'connect.inc.php';
require 'core.inc.php';
/* JPEGCam Test Script */
/* Receives JPEG webcam submission and saves to local file. */
/* Make sure your directory has permission to write files as your web server user! */

$filename = date('YmdHis') . '.jpg';
$result = file_put_contents( $filename, file_get_contents('php://input') );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $filename;
print "$url\n";
if(empty($_SESSION['user_id2']))
{
	header('Location: index.php');
//echo 'for logout, press <a href="logout.php">logout</a>';
}

$user=$_SESSION['user_id2'];
$query="SELECT `userid` from `users` where `userid`='$user'";
mysql_query($query);


$x="UPDATE users
	SET `plock`='$filename' where `userid`='$user'";
mysql_query($x);

?>
