<?php
function logged_in()
{
	return (isset($_SESSION['user_id']) ? true : false); 	
}

function register_user($register_data){
	array_walk($register_data , 'array_sanitize');
	$register_data['password']=md5($register_data['password']);
	//print_r($register_data);
	$fields ='`' . implode('`,`', array_keys($register_data)) . '`';
	$data = '\'' . implode('\',\'',$register_data) .'\'';
	//echo $fields .'<br>';
	//echo $data;
	echo "INSERT INTO `user_record` ($fields) VALUES ($data)";
	//die();
//	INSERT INTO user_record ($fields) VALUES ($data)

	mysql_query("INSERT INTO `user_record` ($fields) VALUES ($data)");
}

/*function user_count()
{
	return mysql_result(mysql_query("SELECT count(`user_id`) from `user_record` where `active` = 1"),0);
}
*/


function rmovies($user_id)
{
	$s=$user_id;
	$n=0;

	$result1 = mysql_query("SELECT `movie1` FROM `user_record` WHERE `user_id` ='$s'");
	echo $result1;
	$result=mysql_fetch_array( $result1,MYSQL_ASSOC );
//	echo $result;
	//echo $result[0];
//	$kk=$result;
	$res1 = mysql_query("SELECT `Genre1` FROM `movies_database` WHERE Movie_ID='$result' ");
	//echo $res1;
	$res2 =mysql_fetch_array($res1);
	$res3=mysql_query("SELECT `Movie_ID` FROM `movies_database` WHERE `Genre1` = '$res2' AND `Rating` > 8 LIMIT 0,5");
	$res4=mysql_fetch_array($res3);
	//echo $res4;
	while ( $n< 5) 
	{
		$result2 = mysql_query("SELECT `Movie_Name` FROM `movies_database` WHERE `Movie_ID` = '$res4[$n]'");
		$result3=mysql_fetch_array($result2);
		echo "<li>".$result3[0]."</li>"."<br>";
		$n++;
	}
}


function user_count(){
	return mysql_result(mysql_query("SELECT count(`user_id`) FROM `user_record`"), 0)+1;
}



function user_data($user_id){
	$data = array();
	$user_id =(int)$user_id;
	$func_num_args = func_num_args();
	$func_get_args =func_get_args();
	//print_r($func_get_args);
	if ($func_num_args > 1) {
		unset($func_get_args[0]);
	 //print_r($func_get_args);

		$field = '`' . implode('`,`', $func_get_args) . '`';
			//echo $field;
			//echo "SELECT $field from `user_record` where `user_id`= $user_id";
			//die();
		$data =mysql_fetch_assoc(mysql_query("SELECT $field from `user_record` where `user_id`= $user_id"));
		//print_r($data);
		//die();
		return $data;
	}
}


function user_exists($username)
{
	$username=sanitize($username);
	$query= mysql_query("SELECT count(`user_id`) from `user_record`where `username`='$username'" );
	return (mysql_result($query, 0) == 1) ? true : false;
}


function email_exists($email)
{
$email=sanitize($email);
$query= mysql_query("SELECT count(`user_id`) from `user_record` where `email`='$email'" );
return (mysql_result($query, 0) == 1) ? true : false;
}


function user_active($username)
{
$username=sanitize($username);
$query2= mysql_query("SELECT count(`user_id`) from `user_record` where `username`='$username' and `status` = 1" );
return (mysql_result($query2, 0) == 1) ? true : false;
}

function user_id_from_username($username)
{
		$username=sanitize($username);
		return mysql_result(mysql_query("SELECT `user_id` from `user_record` where `username` = '$username' "), 0,'user_id'); 
}

function login($username,$password)
{
	$user_id=user_id_from_username($username);
		$username=sanitize($username);
		$password=md5($password);
		$query1 = mysql_query("SELECT count(`user_id`) from `user_record` where `username`='$username' and `password`='$password'");
		return (mysql_result($query1,0)==1) ? $user_id : false;
}

function proffer_movie($user_id)
{
	$s=$user_id;
	$n=0;
	$result1 = mysql_query("SELECT rmovie1, rmovie2, rmovie3, rmovie4, rmovie5  FROM r_movie WHERE user_id ='$s'");
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