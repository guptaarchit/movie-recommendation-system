<?php

	$connect_error ='Sorry we are experiencing connection problem.';
	mysql_connect('localhost','root','hackingclub') or die($connect_error);
	mysql_select_db('algoproject') or die($connect_error);
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	//$mysqli=mysqli_connect('localhost','root','hackingclub','autofield') or die("Database Error");
	$sql="SELECT Movie_Name FROM movies_database WHERE Movie_Name LIKE '%$my_data%' ORDER BY Movie_Name";
	$result = mysql_query($sql) or die(mysql_errno());
	/*
	if($result)
	{
		while($row=mysql_fetch_field($result))
		{
			echo $row['name']."\n";
		}
	}*/
	while($rs = mysql_fetch_array($result)) {
	$cname = $rs['Movie_Name'];
	echo "$cname\n";
}
?>