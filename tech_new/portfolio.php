<!DOCTYPE html>

<html>
	<head>
		<?php include "main.php";
			getHead("Square Infinity Portfolio");
		?>
		<link href="portfolio.css" rel="stylesheet" type="text/css" />
		
		<script>
			$(document).ready(function(){
				
			});
		</script>
	</head>
	<body onload="init();">	
		<?php getTopBar(); ?>
		
		<!-- CONTENT STARTS HERE -->
		
		<div class="portfolio-container">
			
			<div class="portfolio-entry" name="portfolio-part" style="background: url('http://crispme.com/wp-content/uploads/old-city.jpg?pass');">
				<div class="portfolio-content" name="portfolio-entry">
					<i class="fa fa-globe fa-2x portfolio-icon"></i>
					<h1>A Web Job</h1>
					<h2>This is an example web job that we have done.</h2>
				</div>
			</div>
			
			<div class="portfolio-entry" name="portfolio-part" style="background: url('http://crispme.com/wp-content/uploads/254497-1920x1080.jpg?pass');">
				<div class="portfolio-content" name="portfolio-entry">
					<i class="fa fa-mobile fa-2x portfolio-icon"></i>
					<h1>An App Job</h1>
					<h2>This is an example of an app we have designed.</h2>
				</div>
			</div>
			
		</div>
	</body>
</html>