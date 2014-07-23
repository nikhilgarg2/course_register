<?php
ob_start();
require 'connect.inc.php';
require 'core.inc.php';
if(empty($_SESSION['user_id2']))
{

header('Location: Programs.php');

}
if(!empty($_POST['val']))

{$user=$_SESSION['user_id2'];
$query="SELECT `user` from `users` where `userid`='$user'";
$row=mysql_fetch_row(mysql_query($query));
$query1=$row[0];

foreach($_POST['val'] as $val) {
$mysql="SELECT * from `$query1` where `cid`='$val'";
$mysql=mysql_num_rows(mysql_query($mysql));
if($mysql==0)
{$query = "INSERT INTO $query1 
				VALUES ('$val')";
mysql_query($query);  // 1st time (does query foreach zip_code)
}
$mysq="SELECT `roll` from `users` where `userid`='$user'";
$row=mysql_fetch_row(mysql_query($mysq));
$row=$row[0];
$query="SELECT `rollno` from `$val` where `rollno`='$row'";
$query=mysql_fetch_row(mysql_query($query));
if($query==0)
{
$query="INSERT INTO $val
		Values('$row')";
		mysql_query($query);

}
} 
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
<p class=font2><i>Courses For You</i></p>
</div>
				
								<form method='post' action='check.php'>
<?php
require 'connect.inc.php';
require 'core.inc.php';
if(empty($_SESSION['user_id2']))
{
	header('Location: index.php');
//echo 'for logout, press <a href="logout.php">logout</a>';
}

$user=$_SESSION['user_id2'];
$query="SELECT `year` from `users` where `userid`='$user'";
$row=mysql_fetch_row(mysql_query($query));
$query1=$row[0];


$sql="SELECT * FROM `courses` where `year`= '$query1'";
$res1=mysql_query($sql);
$numfields=mysql_num_fields($res1);
$data=array();
$flist=array();
for($i=0;$i<$numfields;$i++)$flist[] = mysql_field_name($res1,$i);
    $data[0] = $flist;
    echo "<table align:center border='4' cellspacing='10'>
    <tr>
    <th>S.No ".' '."</th> 
    
    <th>Credits "."	"."</th>
    <th>Course ID"."	"."</th> 
<th>"."		"."</th>
    </tr>";
 while($row = mysql_fetch_assoc($res1)) {
        $data[] = $row;


 echo "<tr>";
    echo "<td>" . $row['cid'] . "</td>";
    
    echo "<td>" . $row['credit']. "</td>";
   echo "<td>" . $row['cname'] . "</td>";
echo "<td>" . '<input type="checkbox" name="val[]" value="'. $row['cid'].'"/>' . "</td>";
  

}
echo"</table>";
?>

<input type="submit" class=button >
</form>
</article>
<article class="col2 pad_left2">
<br><br>
<div class="pad_left1">
	<p class=font2><i>Credits</i></p>
</div>
<img src=" <?php require"connect.inc.php"; require"core.inc.php";$user=$_SESSION['user_id2']; $x="SELECT `plock` from `users` where `userid`='$user'"; $a = mysql_fetch_array(mysql_query($x)); echo $a['plock']; ?>" width="160" height="120"></img>
							<div class="pad_left1">
								<h2>Navigation Panal</h2>
							</div>
							<ul class="list1">
								<li><a href="idcard.php">Generate ID Card</a></li>
								<li><a href="mycourse.php">My Courses</a></li>
								<li><a href="imgcptr.php">Take photo</a></li>
								<li><a href="del.php">delete courses</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
							
						</article>
							
			
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
