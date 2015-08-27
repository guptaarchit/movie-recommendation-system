<?php
function recommend_movie($user_id){
	$query= mysql_query("SELECT `movie1`,`movie2`,`movie3`,`movie4`,`movie5` from `user_record`where `user_id`='$user_data['user_id']'");
	return (mysql_result($query, 0) == 1) ? true : false;


	$result1 = mysql_query("SELECT `movie1`,`movie2`,`movie3`,`movie4`,`movie5` from `user_record`where `user_id`='$user_data['user_id']'");
	$result=mysql_fetch_array($result1);
	while ( $n< 5) 
	{	
		$result2 = mysql_query("SELECT Movie_Name FROM movies_database WHERE Movie_ID = $result[$n]");
		$result3=mysql_fetch_array($result2);
		echo "<li>".$result3[0]."</li>"."<br>";
		$n++;
	}
}


?>