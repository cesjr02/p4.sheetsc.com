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
		
		<!-- displays location name -->
		<h3 class="h3"><?=$review['location']?> - <?=$review['city']?> <?=$review['state']?></h3>
		
		<!-- displays review content -->
		<p class='postContent'><?=$review['review']?></p>
		
		<!-- display star rating -->
		<h4 class=''h4> <?=$review['rating']?> stars out of 5</h4>
		
		<!-- displays 'Your review' for own reviews, otherwise displays user's name -->
		<?php if($review['user_id'] == $user->user_id): ?>
			<p class='reviewedBy'>Your Review<p>
		<?php else: ?>
			<p class='reviewedBy'>Submitted by: <?=$review['first_name']?> <?=$review['last_name']?></p>
		<?php endif; ?>
		
		<!-- displays time review was created -->
		<p class='datetime'>Created on: <time datetime='<?Time::display($review['created'],'Y-m-d G:i')?>'>
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