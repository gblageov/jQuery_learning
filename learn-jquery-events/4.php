<?php require(__DIR__ . '/partials/header.php'); ?>

<style>
	.item-with-popover { position: relative; }
	.custom-popover { top: 100%; left: 0; border: solid 1px red; width: 100%; padding: 5px; }
</style>

<script>
	/*
		- Show the popover element whenever the button is clicked.
		- Hide the popover element when any part of the page is clicked after that(except for the button)
		- Here is how it should work: https://www.youtube.com/watch?v=V1TpvxPJTq4
	*/
	
	$(document).ready(function() {
		var hideClass = 'hidden';

		var $hiddenElement = $('.custom-popover');
		var $button = $('button');
		
		$button.on('click', function() {
			$hiddenElement.removeClass(hideClass);
		});
		
		$button.on('blur', function() {
			$hiddenElement.addClass(hideClass);			
		});
	});

</script>

<div class="col-md-2">
	<div class="item-with-popover">
		<button class="popover-control btn">Show Popover</button>

		<div class="custom-popover hidden">
			Some text
		</div>
	</div>
</div>

<div class="col-md-10">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
</div>

<?php require(__DIR__ . '/partials/footer.php');

// $(() =>
// 		$('button').on('click', () => 
// 			$('.custom-popover').removeClass('hidden')
// 		);
// 	)
// 	$('click')