<?php 
include 'core/init.php'; 
//include 'core/functions/general.php';
/*
if (user_exists('gaurav.2')===true) {
	echo "Login sucessfull";
}
*/
?>
<?php
if(empty($_POST) === false)
{
	$username = $_POST['username'];
	$password = $_POST['password'];	

//	echo $username,'  ',$password;

if (empty($username) === true || empty($password) === true) 
{
	$errors[] ="You need to enter user name and password";
}
else if (user_exists($username)===false) 
	{
		$errors[]="We cant find the user make sure  you have  Register";
	}
		elseif (user_active($username)===false) {
				# code...
				$errors[]=" You haven\'t activated your account";

	}else
	{
		$login=login($username, $password);
		if ($login === false) {
			$errors[]="username password combination incorrect";
		}
		else{
			
			echo "here we go....";
			echo $login;
			//die($login);
			//$_session['user_id'] = $login;
			$_SESSION['user_id'] = $login;
			header('Location: profile.php');
			exit();

		}
	}
	//print_r($errors);
	}
	else
		{	
			$errors='No data received sorry please try again';
		}

	include 'includes/overall/start.php '; 
?>
<?php
		if (empty($errors)===false) {
			# code...
		?>
		<h2>We tried to log you in but....</h2>
		<div id="msg_display">
			<?php
				echo output_errors($errors);
		}
			?>;
			<hr>
			You can register here
			<br>
			<b><a href="index.php">click me</a><b>
		</div>
		<?php
		
	 include '/includes/overall/end.php';
?>