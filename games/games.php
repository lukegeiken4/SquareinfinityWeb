<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('Entertainments') ?>

<body >
<?php getMainBar('Entertainments'); ?>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<div class="games_div" id="travelquest">
			<div class="games_div_opacity">
				
			</div>
		</div>
		
		<div class="games_div" id="losthope">
			<div class="games_div_opacity">
				
			</div>
		</div>
		
		<div class="games_div" id="utterdark">
			<div class="games_div_opacity">
				
			</div>
		</div>
		
		<div class="games_div" id="droidsnake">
			<div class="games_div_opacity">
				
			</div>
		</div>
		<?php getFooter(); ?>
	</div>
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