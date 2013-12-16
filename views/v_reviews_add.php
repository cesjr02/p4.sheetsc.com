<div class='col-md-6 col-md-offset-3'>
	<!-- form for adding a new post -->
	<form role="form" id="myForm" method='POST' action='/reviews/p_add'>
		
		<h2 class='h2'>Post your Bloody Mary Review</h2>
		<p><span class="label label-warning">All fields required</span></p>

		<div class='form-group'>
			<select class='form-control required' name="state" id="state"> 
				<option value="" selected="selected">Select a State</option> 
				<option value="AL">Alabama</option> 
				<option value="AK">Alaska</option> 
				<option value="AZ">Arizona</option> 
				<option value="AR">Arkansas</option> 
				<option value="CA">California</option> 
				<option value="CO">Colorado</option> 
				<option value="CT">Connecticut</option> 
				<option value="DE">Delaware</option> 
				<option value="DC">District Of Columbia</option> 
				<option value="FL">Florida</option> 
				<option value="GA">Georgia</option> 
				<option value="HI">Hawaii</option> 
				<option value="ID">Idaho</option> 
				<option value="IL">Illinois</option> 
				<option value="IN">Indiana</option> 
				<option value="IA">Iowa</option> 
				<option value="KS">Kansas</option> 
				<option value="KY">Kentucky</option> 
				<option value="LA">Louisiana</option> 
				<option value="ME">Maine</option> 
				<option value="MD">Maryland</option> 
				<option value="MA">Massachusetts</option> 
				<option value="MI">Michigan</option> 
				<option value="MN">Minnesota</option> 
				<option value="MS">Mississippi</option> 
				<option value="MO">Missouri</option> 
				<option value="MT">Montana</option> 
				<option value="NE">Nebraska</option> 
				<option value="NV">Nevada</option> 
				<option value="NH">New Hampshire</option> 
				<option value="NJ">New Jersey</option> 
				<option value="NM">New Mexico</option> 
				<option value="NY">New York</option> 
				<option value="NC">North Carolina</option> 
				<option value="ND">North Dakota</option> 
				<option value="OH">Ohio</option> 
				<option value="OK">Oklahoma</option> 
				<option value="OR">Oregon</option> 
				<option value="PA">Pennsylvania</option> 
				<option value="RI">Rhode Island</option> 
				<option value="SC">South Carolina</option> 
				<option value="SD">South Dakota</option> 
				<option value="TN">Tennessee</option> 
				<option value="TX">Texas</option> 
				<option value="UT">Utah</option> 
				<option value="VT">Vermont</option> 
				<option value="VA">Virginia</option> 
				<option value="WA">Washington</option> 
				<option value="WV">West Virginia</option> 
				<option value="WI">Wisconsin</option> 
				<option value="WY">Wyoming</option>
			</select>
		</div>
		
		<div class='form-group'>
			<input type="text" name="city" id="city" class="form-control" placeholder="Enter city" data-validation='length' data-validation-length='3-17' data-validation-error-msg='City must have (3-17 characters)' data-validation-help='Enter city (3-17 characters)'>
		</div>
		
		<div class='form-group'>
			<input type="text" name="location" id="location" class="form-control" placeholder="Enter Bar or Restaurant name" data-validation='length' data-validation-length='3-17' data-validation-error-msg='Your location must have (3-17 characters)' data-validation-help='Enter your location (3-17 characters)'>
		</div>
		
		<div class='form-group'>
			<!-- maxlength defined as 255 -->
			<textarea maxlength='255' name='review' id='review' class='form-control' rows='3'  placeholder="Write review" data-validation='length' data-validation-length='20-255' data-validation-error-msg='Review must be (20-255 characters)' data-validation-help='Write a short review (20-255 characters)'></textarea>
		</div>

		<!-- star rating -->
		<select id="backing2b" name="rating" class="required">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		<div class="rateit" data-rateit-backingfld="#backing2b"></div>
		<br>
		<br>
		
		<input type='submit' class='btn btn-primary' value='Submit'>
		
	</form>
	
	<!-- Ajax results will go here -->
	<div id='results'></div>
	
</div><!-- end of col -->