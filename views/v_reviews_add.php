<div class='col-md-6 col-md-offset-3'>
	<!-- form for adding a new post -->
	<form method='POST' action='/reviews/p_add'>
		
		<!-- maxlength defined as 255 -->
		<h2 class='h2'>Post your Bloody Mary Review</h2>
		<input type="text" name="location" id="location" class="form-control" placeholder="Enter location" required>
		<br>
		<textarea maxlength='255' name='review' id='review' class='form-control' rows='3'  placeholder="Write review" required></textarea>
		<br>
		
		<select id="backing2b" name="rating">
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