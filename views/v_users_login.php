<form method='POST' action='/users/p_login'>
    <div class="form-group">
    	<label class="sr-only" for="loginemail">Email address</label>
    	<input type="email" name="email" class="form-control" id="loginemail" placeholder="Enter email" required>
    </div>
    
    <div class="form-group">
    	<label class="sr-only" for="loginpassword">Password</label>
    	<input type="password" name="password" class="form-control" id="loginpassword" placeholder="Password" required>
    </div>
    
    <button type="submit" class="btn btn-default">Sign in</button>
    <br><br>
    <!-- shows error if login failed -->		
    <?php if(isset($error)): ?>
    	<div class='alert alert-danger'>
    		Oh no, signin failed. Please double check your email and password.
    	</div>
    	<br>
    <?php endif; ?>
</form>
