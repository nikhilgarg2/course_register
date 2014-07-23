<?php
require 'core.inc.php';
require 'connect.inc.php';
ob_start();
if(isset($_SESSION['user_id1']) && !empty($_SESSION['user_id1']))
{

echo "Code WORKING :D :D :D<br><br><br>" ;



echo 'To logout please press, <a href="logout.php">logout</a>';
echo "<br><br><br>";

}
else 
{

header('Location:index.php');

}

?>


New faculty:<a href="register.php">register faculty here</a><br><br>
New roll no.<a href="register1.php">Enter the roll number here</a>