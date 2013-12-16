<div class='col-md-6 col-md-offset-3'>
	<h2 class='h2'>Create Account</h2>
	
	<p><span class="label label-warning">All fields required</span></p>
		<!-- form for signup -->
		<form method='POST' action='/users/p_signup'>
		
			<div class='form-group'>
				<label class="sr-only" for="first_name">First Name</label>
			    <input type='text' name='first_name' id="first_name" placeholder="Enter first name" class='form-control' data-validation="required" data-validation-error-msg="You must enter your first name" data-validation-help='Enter your first name' value='<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>'>
			</div>
		
		    <div class='form-group'>
		    	<label class="sr-only" for="last_name">Last Name</label>
			    <input type='text' name='last_name' id="last_name" placeholder="Enter last name" class='form-control' data-validation="required" data-validation-error-msg="You must enter your last name" data-validation-help='Enter your last name' value='<?php if(isset($_POST['last_name'])) echo $_POST['last_name']?>'>
		    </div>
		
		    <div class='form-group'>
		    	<label class="sr-only" for="email">Email address</label>
			    <input type='text' name='email' id="email" placeholder="Enter email" id="email" class='form-control' data-validation="email" value='<?php if(isset($_POST['email'])) echo $_POST['email']?>'>
		    </div>

		    <div class='form-group'>
		    	<label class="sr-only" for="password">Password</label>
		    	<input type='password' name='password' id="password" placeholder="Enter password" class='form-control' data-validation='length' data-validation-length='6-25' data-validation-error-msg='Password must have between 6-25 characters' data-validation-help='Enter password (6-25 characters)'>
		    </div>
		 
		    <div class='form-group'>
		    	<label class="sr-only" for="retype">Retype password</label>
			    <input type='password' name='retype' id="retype" placeholder="Retype password" class='form-control'>
		    </div>
		
		    <!-- checks to see if error isset. If so, echo specific error. -->		
		    <?php if(isset($error)): ?>
		    	<div class='alert alert-danger'>
		    		Sign up failed.<br>
		    		<?php echo $error; ?>
		    	</div>
		    <?php endif; ?>  
		    	
		    <input type='submit' class='btn btn-primary' value='Submit' >

		</form>
</div><!-- end of col -->