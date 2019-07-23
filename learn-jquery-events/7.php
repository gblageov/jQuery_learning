<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// You should create a validation for the field:
	//
	//  - When the field looses focus(the event is called 'blur'), check for the length of the name and add class "has-error" to the div.form-group if the name is less than 3 characters
	//  - If the field has error class, remove the error class(if it's there)
	//  - if the field has error class, and the user focuses the field, remove the error class
	//
	// Here is demo of how this should work: https://youtu.be/hCqSrQXAYhw

	$(function() {
		var $errorMessage = $('.form-group span');			
			
		$('#name').on('blur',function () {
			var inputValue = $.trim($(this).val());

			if (inputValue.length < 3) {
				$errorMessage.removeClass('error-message').addClass('has-error');
			}else{
				$errorMessage.removeClass('has-erroe').addClass('error-message');
			}
		});
	});
		
</script>

<style>
	.form-group .error-message { display: none; }
	.form-group.has-error .error-message { display: inline; }
</style>

<div class="form-group col-md-6">
	<input type="text" class="form-control" id="name">
	<span class="error-message">The name should contain at least 3 characters</span>
</div>

<?php require(__DIR__ . '/partials/footer.php');
