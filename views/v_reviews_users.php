<!-- list of contributors to follow/unfollow -->
<div class='col-md-8'>

	<h2 class='h2'>List of contributors</h2>
	
	<p>Choose to follow or unfollow from the list of contributors below.</p>
	
	<? foreach($users as $contributor): ?>
	
		<!-- you can't unfollow yourself so your button isn't shown -->
		<?php if ($user->user_id != $contributor['user_id']) : ?>
	
			<!-- print this user's name -->
			<h3 class='h3'><?=$contributor['first_name']?> <?=$contributor['last_name']?></h3>
			
			<!-- if there exists a connection with this user, show a unfollow link -->
			<? if(isset($connections[$contributor['user_id']])): ?>
				<a href='/reviews/unfollow/<?=$contributor['user_id']?>'><input type='submit' value='Unfollow' class='btn btn-default' ></a>
				
			<!-- otherwise, show the follow link -->
			<? else: ?>
				<a href='/reviews/follow/<?=$contributor['user_id']?>'><input type='submit' value='Follow' class='btn btn-default' ></a>
			<? endif; ?>
			<br>
		
		<?php endif; ?>
	
	<? endforeach; ?>

</div><!-- end of col -->