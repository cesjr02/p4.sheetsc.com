<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- Bootstrap -->
	<link href='/css/bootstrap.min.css' rel='stylesheet'>
	
	<!-- style.css -->
	<link href='/css/style.css' rel='stylesheet'>
	
	<!-- rate it (star rating) -->
	<link href='/css/rateit.css' rel='stylesheet'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
	<script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
	<![endif]-->


	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>
	<!-- fixed navbar -->
	<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
		<div class='container'>
			<div class='navbar-header'>
			
				<!-- button displays when on mobile devices -->
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
					<span class="sr-only">Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				
				<!-- navbar brand -->
				<a href='/' class='navbar-brand'>Bloody Mary Central</a>
			</div>
			
			<div class='collapse navbar-collapse'>
				<ul class='nav navbar-nav navbar-right'>
				
					<!-- Menu for logged in users -->
					<?php if($user): ?>
					<li class='dropdown'>
					
						<a href='#' class='dropdown-toggle' data-toggle='dropdown'><?php echo $user->first_name; ?> <?php echo $user->last_name; ?> <b class='caret'></b></a>
						
						<ul class='dropdown-menu'>
							<li><a href='/users/profile'><span class='glyphicon glyphicon-user'></span> View My Profile</a></li>
							<li class='divider'></li>
							<li><a href='/reviews/add'><span class='glyphicon glyphicon-comment'></span> Add Review</a></li>
							<li class='divider'></li>
							<li><a href='/reviews'><span class='glyphicon glyphicon-th-list'></span> Reviews</a></li>
							<li class='divider'></li>
							<li><a href='/reviews/users'><span class='glyphicon glyphicon-link'></span> Contributors</a></li>
					
						</ul>
					</li>
						
					<li><a href='/users/logout/'>Sign out</a></li>
						
					<?php else: ?>
					<!-- Menu for users who are not logged in -->
	
					<li><a href='/'>Home</a></li>
					<li><a href='/users/signup'>Register</a></li>					
					<?php endif; ?>				
				</ul>
			</div>
		</div>
	</nav>
	
	<div class='container'>
		<div class='row'>
			<?php if(isset($content)) echo $content; ?>
		</div><!-- end of row -->
	</div><!-- end of container -->


	<!-- footer -->
	<div class='navbar navbar-default navbar-fixed-bottom'>
		<div class='container'>
			<p class='navbar-text pull-right'>Bloody Mary Central - Developed by CJ Sheets</p>
		</div>	
	</div>
	
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src='https://code.jquery.com/jquery.js'></script>
	
	<!-- jQuery UI -->
	<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src='/js/bootstrap.min.js'></script>
	
	<!-- rate it js -->
	<script src='/js/jquery.rateit.min.js'></script>
	
	<!-- js for form validation -->
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.27/jquery.form-validator.min.js'></script>
	<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
	
	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>