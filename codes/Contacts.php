<?php
ob_start();
require 'core.inc.php';
require 'connect.inc.php';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$SQL="INSERT into admin
		Values('','$name','$subject','$email','$message')";
mysql_query($SQL);

header('Location:contacts1.php');
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
								<h2>Contact Form</h2>
								<form id="ContactForm" action="Contacts.php" method="post">
									<div>
										<div  class="wrapper">
											<strong>Name:</strong>
											<div class="bg"><input type="text" class="input" name="name"></div>
										</div>
                                        <div  class="wrapper">
											<strong>Subject:</strong>
											<div class="bg"><input type="text" class="input" name="subject"></div>
										</div>
										<div  class="wrapper">
											<strong>Email:</strong>
											<div class="bg"><input type="text" class="input" name="email"></div>
										</div>
										<div  class="textarea_box">
											<strong>Message:</strong>
											<div class="bg"><textarea name="message" cols="1" rows="1"></textarea>	</div>
										</div>
										<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Send</span></span></a>
										<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span><span>Clear</span></span></a>
									</div>
								</form>
							</div>
						</article>
						<article class="col2 pad_left2">
							<div class="pad_left1">
								<h2>Contact <span>Us</span></h2>
								<p>In case you are facing any difficulty in logging in, you want some content to be changed or you want to report some bug please feel free to contact us. We will try our best to solve the problems for you as soon as we can. Also if you just want to give your feedback do not hesitate. We would love to hear it from you....</p>
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
