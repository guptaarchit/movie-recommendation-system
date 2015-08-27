<?php include '/core/functions/dbfunction.php';
?>


<div class="widget">
	<h2>Profer</h2>
	<div class="inner">
		Here goes best proffer...
		<br>
		<div id="prof">
			<?php
					if(logged_in()===true){
					proffer_movie($user_data['user_id']);
//						rmovies($user_data['user_id']);
					}
			?>
		</div>
	</div>
	<hr>
</div>
