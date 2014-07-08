<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('Games') ?>

<body >
<?php getMainBar('Games'); ?>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<div style="width:100%; height:100%; background: #38B76C; position: relative;">
			<div style="position: absolute; height:20%; width:100%; text-align: center; margin-top: 15%;">
				<h1>We Just Announce Our First Major Game!</h1>
				<h2>We Will Have More Information To Tell You In The Future But For Now Here Is The Game's Logo</h1>
			</div>
			<img src="img/travelquestlogo.png" style="position: absolute; width:70%; height:55%; margin-left:auto; margin-right:auto; bottom: 0; margin-left: 18%;" />
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