<?php
ob_start();
require 'connect.inc.php';
require 'core.inc.php';
if(isset($_SESSION['user_id2']) && !empty($_SESSION['user_id2']))
{
header('Location: check.php');
}

else if(isset($_POST['user']) && isset($_POST['pass']))
{
$user=$_POST['user'];
$pass=md5($_POST['pass']);
if(!empty($user) && !empty($pass))
 {


 	$query="SELECT `userid` from `users` where `user`='$user' && `pass`='$pass'";

 	if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			
				if($query_num_rows==0)	
				{

					header('Location:wup.php');

			    }
		elseif($query_num_rows==1) 
		{

		$user_id=mysql_result($query_run,0,'userid');
 		

	$_SESSION['user_id2']=$user_id;
	 	header('Location: check.php');
		}	 
	 }

 }

else
	{header('Location: supup.php'); }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Students</title>
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
<body id="page3">
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
		</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
	</div>
</div>
<div class="body2">
	<div class="main">
		</div>
	</div>
	<div class="body2">
		<div class="main">
<section id="content">
				<div class="box1">
					<div class="wrapper">
						<article class="col1">
							<div class="pad_left1">
								<h2>Login Form</h2>
								<form id="ContactForm" method="POST" action="Programs.php">
									<div>
										<div  class="wrapper">
											<strong>UserID:</strong>
											<div class="bg"><input type="text" class="input" name="user"></div>
										</div>
										<div  class="wrapper">
											<strong>Pass: </strong>
											<div class="bg"><input type="password" class="input" name="pass"></div>
										</div>
										
										<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Login</span></span></a>
										<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span><span>Clear</span></span></a>

									</div>
<h4>Not registered?? Register<span><span><a href="regester.php"> <i>here!</i></a></span></span><h4>
								</form>
							</div>
						</article>
						<article class="col2 pad_left2">
							<div class="pad_left1">
								<h2>Contact <span>Us</span></h2>
								<p>In case you are facing any difficulty in logging in <a href="Contacts.php"><span><span><span><br>Contact us</span></span></span> </a></p>
							</div>
						</article>
					</div>
				</div>
			</section>
<!-- content -->
<!-- footer -->
<footer>
    <div class="wrapper">
        <div class="pad1">
            <div class="pad_left1">
                <div class="wrapper">
                    
                    <article class="col_4 pad_left2">
                        <h3>Get Updates:</h3>
                        <form id="newsletter" method="post">
                            <div class="wrapper">
                                <div class="bg"><input type="text"></div>
                            </div>
                            <a href="#" class="button" onClick="document.getElementById('newsletter').submit()"><span><span><strong>Subscribe</strong></span></span></a>
                        </form>
                    </article>
                </div>
                <div class="wrapper">
                    <article class="call">
                       Aman Grover Nikhil Garg Anshu Sharma
                    </article>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
