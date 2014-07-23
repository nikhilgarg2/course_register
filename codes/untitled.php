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
while($row=mysql_fetch_array($result))
{
	$x=$row['cid'];
$query="SELECT * from `courses` where `cid`='$x'";
$query2=mysql_query($query);
$row1=mysql_fetch_array($query2);


echo "<table  border='4' cellspacing='10'>
   
								<tr>
								  <th>Course Id ".' '."</th> 
								  <th>---".' '."</th> 
								  <th>Name "."	"."</th>
								  <th>---".' '."</th> 
								  <th>credits"."	"."</th> 
								  
								</tr>";
echo "<tr><td>". $row1['cid'].'	</td><td>---</td><td>	'.$row1['cname'].'	</td><td>---</td><td>	'.$row1['credit'].'	</td></tr></table><br>';


}

	 
		  ?>