<?php
require"connect.inc.php";
 ?>
<html>
<head>
<style type="text/css">
#bimgf{border:2px solid black;
	position: absolute;
	width:300px;
	height:170px;
	top:40px;
	left:40px;
	}
#bimgb{border:2px solid black;
	position: absolute;
	width:300px;
	height:170px;
	top:40px;
	left:380px;
	}
#fimg{
	position: absolute;
	width:90px;
	height:90px;
	top:105px;
	left:55px;
	}
#fhdr{
	position: absolute;
	width:300px;
	height:45px;
	top:40px;
	left:41px;
	}
#fcntnt{border:2px solid yellow;
	position: absolute;
	width:155px;
	height:90px;
	top:105px;
	left:165px;
	}
#bs{
	position: absolute;
	
	top:390px;
	left:300px;
	}


</style>
<script>
function goBack()
  {
  window.history.back()
  }
</script>
</head>
<body>
<div id=bimgf></div>
<div id=bimgb></div>
<div id=fimg><img src=" <?php require"connect.inc.php"; require"core.inc.php";$user=$_SESSION['user_id2']; $x="SELECT `plock` from `users` where `userid`='$user'"; $a = mysql_fetch_array(mysql_query($x)); echo $a['plock']; ?>" width="90" height="90"></img></div>
<div id=fhdr><img src="fhdr.jpg" width="302" height="45"></img></div>
<div id=fcntnt></div>
<div id=bs >
<button onclick="goBack()">Go Back</button>
<button onclick="window.print();">print</button>
</div>
</body>
<html>
