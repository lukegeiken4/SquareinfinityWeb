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
			
			<div class="portfolio-entry portfolio-entry-common" name="portfolio-part" style="background: url(img/UCCS_MAP_IMG.png);">
				<div class="portfolio-content" name="portfolio-entry">
					<i class="fa fa-globe fa-2x portfolio-icon"></i>
					<h1>UCCS Campus Map</h1>
					<h2>Ivan got the online UCCS map working and also made several backend changes to the UCCS website in general.</h2>
					
				</div>
			</div>
			
			<div class="portfolio-entry-portrait-dark portfolio-entry-common" name="portfolio-part" style="background: url(img/UCCS_Radio_News_IMG.png);">
				<div class="portfolio-content" name="portfolio-entry">
					<i class="fa fa-mobile fa-2x portfolio-icon" style="float: left"></i>
					<h1>UCCS Radio </h1>
					<br />
					<h2>Our team developed an application for the UCCS Radio station that allows you to stream their music right to
					your mobile device.</h2>
				</div>
			</div>
			
		</div>
	</body>
</html>