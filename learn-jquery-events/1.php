<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// Покажете div#message, след натискане на бутона #button
	// Може да се направи и с arrow функция '() =>	$('#message').removeClass('hidden'))'
	// $(() => )еквидалент на $(document).redy(function(){})
	
	$( () => 
		$('#button').on('click', () =>
			$('#message').removeClass('hidden')));
	
</script>

<button class="btn btn-primary" id="button">Show the message!</button>

<div id="message" class="alert alert-info hidden">yey :-)</div>


<?php require(__DIR__ . '/partials/footer.php');
