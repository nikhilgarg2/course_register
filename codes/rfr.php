<?php
ob_start();
require 'core.inc.php';
require 'connect.inc.php';
 if(isset($_SESSION['user_id1']) && !empty($_SESSION['user_id1']))
 {if(isset($_POST['name']) && isset($_POST['passwd'])) 
    {
        $name=$_POST['name'];
        $pass=md5($_POST['passwd']);
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
       $sql="SELECT `kid` from `faculty` where `uname`='$name'";
       $sql=mysql_num_rows(mysql_query($sql));
       if($sql==0)
       {
       	$query="INSERT INTO faculty
       			values('','$name',$fname,'$lname','$pass') ";
       			mysql_query($query);
       		header('Location: admin.php');	

       }
else 
{
	header('Location: aroll.php');
}



  } 

  }

else
{

	header('Location: facultylogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
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

			</header>
<!-- / header -->
		</div>
	</div>
	<div class="body2">
		<div class="main">
<!-- content -->
			<section id="content">
				<div class="box1">
					<div class="wrapper">
						<article class="col1">
							<div class="pad_left1">
								<h2>Registration Form</h2>
								<form id="ContactForm" action="rfr.php" method="POST">
									<div>
										<div  class="wrapper">
											<strong>Name:</strong>
											<div class="bg"><input type="text" class="input" name="name"></div>
										</div>
                                        
										<div  class="wrapper">
											<strong>Password:</strong>
											<div class="bg"><input type="password" class="input" name="passwd"></div>
										</div>
										<div  class="wrapper">
											<strong>Firstname:</strong>
											<div class="bg"><input type="text" class="input" name="fname"></div>
										</div>
										<div  class="wrapper">
											<strong>Lastname:</strong>
											<div class="bg"><input type="text" class="input" name="lname"></div>
										</div>

										<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Submit</span></span></a>
										<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span><span>Clear</span></span></a>
									</div>
								</form>
							</div>
						</article>
						<article class="col2 pad_left2">
							
						</article>
					</div>
				</div>
			</section>
<!-- content -->

		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
