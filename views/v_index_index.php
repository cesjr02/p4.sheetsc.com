<div class='col-md-8'>
	<h1 class='h1'>Bloody Mary Central</h1>
	<?php if($user): ?><h2 class='h2'>Hello, <?php echo $user->first_name; ?></h2>
	<p class='p'>Click <?php echo "<a href='/users/profile/'>here</a>"; ?> to go to your profile.</p>
	<?php else: ?><?=$loginContent;?>
	<?php endif; ?>					
</div>

<div class='col-md-4'>

	
</div>