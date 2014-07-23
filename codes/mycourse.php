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
								<div class="pad_left1">
		  <p class=font2><i>My Courses</i></p>
		</div>
		
		  <?php
		     require 'connect.inc.php';
		     require 'core.inc.php';
		   
		    $user=$_SESSION['user_id2'];

		    $sql="SELECT `user` from `users` where `userid`='$user'";
//$sql=mysql_query($sql);
$row=mysql_fetch_row(mysql_query($sql));
$query1=$row[0];


$sq="SELECT * from `$query1`";
$result=mysql_query($sq);
echo "<table  border='4' cellspacing='10'>
   
								<tr>
								  <th>Course Id ".' '."</th> 
								  <th>---".' '."</th> 
								  <th>Name "."	"."</th>
								  <th>---".' '."</th> 
								  <th>credits"."	"."</th> 
								  
								</tr>";
while($row=mysql_fetch_array($result))
{
	$x=$row['cid'];
$query="SELECT * from `courses` where `cid`='$x'";
$query2=mysql_query($query);
$row1=mysql_fetch_array($query2);



echo "<tr><td>". $row1['cid'].'	</td><td>---</td><td>	'.$row1['cname'].'	</td><td>---</td><td>	'.$row1['credit'].'	</td></tr></table><br>';


}

	 echo" <a href='check.php'><br>back</a>";
		  ?>

		 

							</div>
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
