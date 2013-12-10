// setup the options for ajax
var options = {
	type: 'POST',
	url: '/reviews/p_add/',
	beforeSubmit: function() {
		$('#results').html("Adding...");
	},
	success: function(response) {
		$('#results').html(response);
		$('#review').val('');
		$('#location').val('');
		$('#backing2b').val('0');
	}
};

// using the above options ajax the form
$('form').ajaxForm(options);