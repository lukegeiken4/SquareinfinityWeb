<!DOCTYPE html>

<html>

<head>
<title>Square Infinity</title>
	<link rel="shortcut icon" href="images/favicon.gif" />
	<link href="squareInfinityStylesheet.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<meta name = "description" content="Square Infinity combines professional web and mobile application contracting with the quirky goodness of Indie game development. Come join us on our journey!"/>
	<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.png"/>
	<meta property="og:site_name" content="Square Infinity"/>
	<meta property="og:title" content="Square Infinity"/>
	<meta property="og:url" content = "http://www.squareinfinity.com/"/>
</head>

<body>
	<div class="main">
		<div class="gameBackground">
			<div class="gamesBanner" >
				<img src="images/fakegamebanner.png" style="box-shadow:none; display: block; margin-left: auto; margin-right:auto;"/>
			</div>
		</div>
		<div class="techBackground">
			<div class="techBanner" >
				<img src="images/faketechbanner.png" style="box-shadow:none; display: block; margin-left: auto; margin-right:auto; "/>
			</div>
		</div>
		<img src="images/line.png" style="box-shadow:none; height:100%; display: block; margin-left: auto; margin-right:auto; z-index:-1;" />
		<div class="centerImage">
			<img src="images/SIsplitLogo.png" style="box-shadow:none; z-index:1;"/>
		</div>
		<!--<a href="games/index.php"><div class="button" id="game">Square Infinity Games</div><!--/a>
		<a href="tech/index.php"><div class="button" id="tech">Square Infinity Technology</div><!--</a>-->
	</div>
</body>
<script>
	$('.gameBackground').click(function() {
		window.location.href = "games/index.php";
	});
	
	$('.techBackground').click(function() {
		window.location.href = "tech/index.php";
	});
	
</script>
</html>