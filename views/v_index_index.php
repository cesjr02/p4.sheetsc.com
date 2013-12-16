<div class='col-md-4'>
	<h1 class='h1'>Bloody Mary Central</h1>
	<?php if($user): ?><h2 class='h2'>Hello, <?php echo $user->first_name; ?></h2>
	<p class='p'>Click <?php echo "<a href='/users/profile/'>here</a>"; ?> to go to your profile.</p>
	<?php else: ?><?=$loginContent;?>
	<?php endif; ?>					
</div>

<div class='col-md-8'>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/slide1.jpg" alt="...">      
		</div>
		
		<div class="item">
			<img src="images/slide2.jpg" alt="...">      
		</div>
		
	<div class="item">
			<img src="images/slide3.jpg" alt="...">
		</div>
		
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>

	
</div>