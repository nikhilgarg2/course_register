<?php
ob_start();
require 'core.inc.php';
require 'connect.inc.php';
if(empty($_SESSION['user_id']))
{
	header('Location: facultylogin.php');
//echo 'for logout, press <a href="logout.php">logout</a>';
}

if(!empty($_POST['course']) && !empty($_POST['cid']))
{ 
$name=$_POST['course'];
$cid=$_POST['cid'];
$credit=$_POST['credit'];
$year=$_POST['year'];
$user=$_SESSION['user_id'];
$query="SELECT `firstname` from `faculty` where `kid`='$user'";
$row=mysql_fetch_row(mysql_query($query));
$query1=$row[0];
$sql="INSERT INTO courses
	  values('$cid','$name','$query1','$year','$credit')";
mysql_query($sql);

$sq="CREATE TABLE $cid(
				rollno varchar(11))";
			mysql_query($sq);


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Base</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
	.bg, .box2 {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
		<img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
</head>

<body id="page5">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="index.php">About</a></li>
						<li><a href="Courses.php">Courses</a></li>
						<li><a href="Programs.php">Students</a></li>
						<li><a href="Teachers.php">Teachers</a></li>
						<li class="end"><a href="Contacts.php">Contact us</a></li>
						<!----------session li for home page----------->

						</ul>
					</nav>
					<ul id="icons">
						<li><a href="#"><img src="images/icons1.jpg" alt=""></a></li>
						<li><a href="#"><img src="images/icons2.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">Learn Center</a></h1>
				</div>
				<div id="slogan">
					Scaling the heights.....
				</div>

			</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
<!-- content -->
			<section id="content">
				<div class="box1">
					<div class="wrapper">
						<article class="col1">
							<div class="pad_left1">
								
<br>
<p class=font1>COURSE ADDITION FORM </p>
<form action='faculty.php' method='post' id="ContactForm">
<div>
<div  class="wrapper">
<strong>Course</strong>
<div class="bg"><input type="text" class="input" name="course"></div>
</div>
<div  class="wrapper">
<strong>Course Id:</strong>
<div class="bg"><input type="text" class="input" name="cid"></div>
</div>




<div  class="wrapper">
<strong>Year :</strong>
<div class="bg"><input type="text" class="input" name="year"></div>
</div>
<div  class="wrapper">
<strong>Credits :</strong>
<div class="bg"><input type="text" class="input" name="credit"></div>
</div>
<li><input type="submit" class="button"></li>

</ul>

</form>





							</div>
						</article>
<article class="col2 pad_left2">
<br><br>
<img src="ph.jpg" width="160" height="120"></img>
							<div class="pad_left1">
								<h2>Navigation Panal</h2>
							</div>
							<ul class="list1">
								<li><a href="cs1.php">Check students</a></li>
								<li><a href="#">change photo</a></li>
								<li><a href="#">change Password</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
							
						</article>
					</div>
				</div>
			</section>
<!-- content -->
		</div>
	</div>
	<div class="body2">
		<div class="main">

		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
