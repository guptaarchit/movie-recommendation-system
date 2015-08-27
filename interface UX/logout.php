<?php
session_start();
session_destroy();
?>

<h1><center>Thank You for visiting us.</center></h1>
<h2><center>See you soon...</center></h2>

<?php
//sleep(20);
header ("Refresh:5; URL=index.php");
//header('Location: index.php');
?>