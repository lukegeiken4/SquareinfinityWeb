<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('Games') ?>

<body >
<?php getMainBar('Games'); ?>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<div class="games_div" id="games_div_1">
			<div class="games_div_opacity">
				
			</div>
		</div>
		
		<div class="games_div" id="games_div_2">
			<div class="games_div_opacity">
				
			</div>
		</div>
		
		<div class="games_div" id="games_div_3">
			<div class="games_div_opacity">
				
			</div>
		</div>
		
		<div class="games_div" id="games_div_4">
			<div class="games_div_opacity">
				
			</div>
		</div>
	</div>
	
	<div id="hidden-link" style="z-index: 1;"></div>
</body>
<script>
	$('#home-head').click(function() {
		window.location.href = "index.php";
		
	});
	
	$('#team-head').click(function() {
		window.location.href = "team.php";
		
	});
	
	$('#contact-head').click(function() {
		window.location.href = "contact.php";
		
	});
	
	$('#hidden-link').click(function() {
		window.location.href = "hidden.php";
		
	});
	
</script>
</html>