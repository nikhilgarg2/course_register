<?php

ob_start();
require 'core.inc.php';
require 'connect.inc.php';
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']))
{
$user=$_POST['user_name'];
$pass=md5($_POST['passwd']);
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$year=$_POST['year'];
$roll=$_POST['roll'];
$branch=$_POST['branch'];
$add=$_POST['message'];
$guard=$_POST['guard'];
$phone1=$_POST['phone1'];
$SQL="SELECT `roll` from `users` where `roll`='$roll'";
$result=mysql_num_rows(mysql_query($SQL));
if($result!=0)
{
$sql="UPDATE users
		SET `user`='$user', `pass`='$pass', `name`='$name', `phone`='$phone', `add`='$add', `guard`='$guard', `gphone`='$phone1', `email`='$email', `Year`='$year', `Branch`='$branch' where `roll`='$roll'";

mysql_query($sql);
$sql1="CREATE TABLE $user(
				cid varchar(11))";
			mysql_query($sql1);
header('Location: Programs.php');

}
else
{
	header('Location: inv.php');
}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Programs</title>
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
								<h2>Registration Form</h2>
								<form id="ContactForm" method="post" action="regester.php">
									<div>
										<div  class="wrapper">
											<strong>UserID:</strong>
											<div class="bg"><input type="text" class="user_name input" name="user_name" id="user_id"></div>
										<span class="check"></span>
										</div>
										<div  class="wrapper">
											<strong>Pass:</strong>
											<div class="bg"><input type="password" class="input" name="passwd"></div>
										</div>
<hr>
<hr>
<div  class="wrapper">
											<strong>Name:</strong>
											<div class="bg"><input type="text" class="input" name="name"></div>
										</div>
<div  class="wrapper">
											<strong>Phone:</strong>
											<div class="bg"><input type="text" class="input" name="phone"></div>
										</div>
<div  class="wrapper">
											<strong>email:</strong>
											<div class="bg"><input type="text" class="input" name="email"></div>
										</div>
<div  class="wrapper">
											<strong>Year</strong>
											<div class="bg"><input type="text" class="input" name="year"></div>
										</div>
<div  class="wrapper">
											<strong>Rollno:</strong>
											<div class="bg"><input type="text" class="roll_id input" name="roll"></div>
											<span class="check1"></span>
										</div>
<div  class="wrapper">
											<strong>Branch:</strong>
											<div class="bg"><input type="text" class="input" name="branch"></div>
										</div>
<div  class="textarea_box">					<div class="textarea_box">
											<strong>Address:</strong>
											<div class="bg"><textarea name="message" cols="1" rows="1" ></textarea>	</div>
										</div>
<hr>
<hr>

<div  class="wrapper">
											<strong>Guardian:</strong>
											<div class="bg"><input type="text" class="input" name="guard"></div>
										</div>
<div  class="wrapper">
											<strong>phone:</strong>
											<div class="bg"><input type="text" class="input" name="phone1"></div>
										</div>

										<div > <button type="submit" class="button"><i>register</i></div></button>
									<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function()
            {
                $('.user_name').keyup(function()
                {
                    var checkname=$(this).val();
                    var availname=remove_whitespaces(checkname);
                    if(availname!=''){
                        $('.check').show();
                        $('.check').fadeIn(400).html('<img src="images/ajax-loading.gif" /> ');

                        var String = 'username='+ availname;

                        $.ajax({
                            type: "POST",
                            url: "username-check.php",
                            data: String,
                            cache: false,
                            success: function(result){
                                var result=remove_whitespaces(result);
                                if(result==''){
                                    $('.check').html('<img src="images/accept.png" /> This Username Is Avaliable');
                                                }else{
                                    $('.check').html('<img src="images/error.png" /> This Username Is Already Taken');
                                                     }
                            }
                        });
                    }else{
                        $('.check').html('');

                    }
                });
            });
            function remove_whitespaces(str){
                var str=str.replace(/^\s+|\s+$/,'');
                return str;
            }
        </script>		
        			<script type="text/javascript">
            $(function()
            {
                $('.roll_id').keyup(function()
                {
                    var checkname=$(this).val();
                    var availname=remove_whitespaces(checkname);
                    if(availname!=''){
                        $('.check1').show();
                        $('.check1').fadeIn(400).html('<img src="images/ajax-loading.gif" /> ');

                        var String = 'username='+ availname;

                        $.ajax({
                            type: "POST",
                            url: "rollcheck.php",
                            data: String,
                            cache: false,
                            success: function(result){
                                var result=remove_whitespaces(result);
                                if(result==''){
                                    $('.check1').html('<img src="images/error.png" /> This roll number Is not availname.');
                                                }else{
                                    $('.check1').html('<img src="images/accept.png" /> This roll number Is Available.');
                                                     }
                            }
                        });
                    }else{
                        $('.check1').html('');

                    }
                });
            });
            function remove_whitespaces(str){
                var str=str.replace(/^\s+|\s+$/,'');
                return str;
            }
        </script>

										
										
										<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span><span>Clear</span></span></a>
									</div>
								</form>
							</div>
						</article>
						<article class="col2 pad_left2">
							<div class="pad_left1">
								<h2>Contact <span>Us</span></h2>
								<p>In case you are facing any difficulty in registering 
<a href="Contacts.php"><span><span><span><br>Contact us</span></span></span> </a></p>
							</div>
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

