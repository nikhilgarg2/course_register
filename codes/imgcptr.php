
<!DOCTYPE html>
<html lang="en">
<head>
<title>Image capture</title>
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
							<li><a href="index.html">About</a></li>
						<li><a href="Courses.html">Courses</a></li>
						<li><a href="Programs.html">Students</a></li>
						<li><a href="Teachers.html">Teachers</a></li>
						<li class="end"><a href="Contacts.html">Contact us</a></li>
						<!----------session li for home page----------->

						</ul>
					</nav>
					<ul id="icons">
						<li><a href="#"><img src="images/icons1.jpg" alt=""></a></li>
						<li><a href="#"><img src="images/icons2.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="wrapper">
					<h1><a href="index.html" id="logo">Learn Center</a></h1>
				</div>
				<div id="slogan">
					Scaling the heights.....
				</div>

			</header>
<!-- / header -->
<!-- content -->
			<section id="content">
				<div class="box1">
					<div class="wrapper">
						<article class="col1">
							<div class="pad_left1">
								<br>
                                <br>
                                
                                <table><tr><td valign=top>
                                    <h2>Say Cheese </h2>
                                    <h3>Click on capture then upload</h3>
                                    
                                    <!-- First, include the JPEGCam JavaScript Library -->
                                    <script type="text/javascript" src="webcam.js"></script>
                                    
                                    <!-- Configure a few settings -->
                                    <script language="JavaScript">
                                        webcam.set_api_url( 'test.php' );
                                        webcam.set_quality( 90 ); // JPEG quality (1 - 100)
                                        webcam.set_shutter_sound( true ); // play shutter click sound
                                        </script>
                                    
                                    <!-- Next, write the movie to the page at 320x240 -->
                                    <script language="JavaScript">
                                        document.write( webcam.get_html(320, 240) );
                                        </script>
                                    
                                    <!-- Some buttons for controlling things -->
                                    <br/><form>
                                        <input type=button value="Configure..." onClick="webcam.configure()" class="button">
                                            &nbsp;&nbsp;
                                            <input type=button value="Capture" onClick="webcam.freeze()" class="button">
                                                &nbsp;&nbsp;
                                                <input type=button value="Upload" onClick="do_upload()" class="button">
                                                    &nbsp;&nbsp;
                                                    <input type=button value="Reset" onClick="webcam.reset()" class="button">
                                                        <a href='check.php'> <input type='button'  value="Back"  class="button"></a>
                                                        </form>
                                    
                                    <!-- Code to handle the server response (see test.php) -->
                                    <script language="JavaScript">
                                        webcam.set_hook( 'onComplete', 'my_completion_handler' );
                                        
                                        function do_upload() {
                                            // upload to server
                                            document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
                                            webcam.upload();
                                        }
                                    
                                    function my_completion_handler(msg) {
                                        // extract URL out of PHP output
                                        if (msg.match(/(http\:\/\/\S+)/)) {
                                            var image_url = RegExp.$1;
                                            // show JPEG image in page
                                            document.getElementById('upload_results').innerHTML = 
                                            '<h1>Upload Successful!</h1>' + 
                                            '<h6>JPEG URL: ' + image_url + '</h6>' + 
                                            '<img src="' + image_url + '">';
                                            
                                            // reset camera for another shot
                                            webcam.reset();
                                        }
                                        else alert("PHP Error: " + msg);
                                    }
                                    </script>
                                    
                                </td><td width=50>&nbsp;</td><td valign=top>
                                    <div id="upload_results" style="background-color:#eee;"></div>
                                </td></tr></table>

                                
                                
     
                                
                                <br>
                                <br>
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
	<div class="body2">
		<div class="main">

		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
