<?php include 'core/init.php';?>
<?php include '/includes/overall/start.php';?>
<?php include 'signup.php';?>


<?php

if (logged_in() === true) {
	# code...
	echo "hurry logged in";
}
else
echo "NOT loged in";
?>



<?php include '/includes/overall/end.php';?>


