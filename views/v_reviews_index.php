<div class='col-md-6 col-md-offset-3'>
	<h2 class='h2'>User Reviews</h2>
	
		<!-- if review are empty link users to /reviews/users/ -->
		<?php if(empty($reviews)): ?>	
			<p>
				Click <a href='/reviews/users/'>here</a> to start following other users. 
			</p>	
		<?php endif; ?>
		<?php foreach($reviews as $review): ?>
	
	<!-- shows reviews feed -->
	<article>
		
		<!-- displays 'You reviewed' for own reviews, otherwise displays user's name -->
		<?php if($review['user_id'] == $user->user_id): ?>
			<h3 class='h3'>You yapped:<h3>
		<?php else: ?>
			<h3 class='h3'><?=$review['first_name']?> <?=$review['last_name']?> yapped:</h3>
		<?php endif; ?>
		
			<!-- displays review content -->
			<p class='postContent'><?=$review['content']?></p>
		
			<!-- displays time review was created -->
			<p class='datetime'>Yapped on: <time datetime='<?Time::display($review['created'],'Y-m-d G:i')?>'>
			<?=Time::display($review['created'])?>
			</time></p>
		
		<!-- displays delete button on logged in user reviews -->
		<?php if($review['user_id'] == $user->user_id): ?>
			<a href='/reviews/delete/<?=$review['review_id']?>'><button type='button' class='btn btn-default'>Delete Review</button></a>
		<?php else: ?>
		<?php endif; ?>
	
	</article>
	
		<?php endforeach; ?>
	
</div><!-- end of col -->