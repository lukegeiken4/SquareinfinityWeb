<!DOCTYPE html>

<html>

<head>
	<title>Square Infinity Games</title>
	<link rel="shortcut icon" href="img/favicon.gif" />
	<link href="css/sIGamesStylesheet.css" rel="stylesheet" type="text/css"/>
	<!--<link href="../css/topNavbarStyle.css" rel="stylesheet" type="text/css">-->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<meta name = "description" content="As an Independent game creator, the Square Infinity games team is looking to push the limits of storytelling and gameplay from where the best games are created, our parent's basement."/>
	<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.png"/>
	<meta property="og:site_name" content="Square Infinity Games"/>
	<meta property="og:title" content="Square Infinity Games"/>
	<meta property="og:url" content = "http://www.squareinfinity.com/"/>
</head>

<body >
	<div style="position: absolute; width: 100%; height:20%; z-index:5;">
		<img src="img/whitestretchLogo3.png" style="display: block; width: 20%; height:40%; z-index:5; margin-left: auto; margin-right: auto; margin-top: 3%;" />
		<div nav-headers" id="home-head"></div>
		<img src="img/placemarker.png" style="position: absolute; width:8%; height:50%; top:53%; left:70%;" />
		<div "nav-headers" id="games-head"></div>
		<div "nav-headers" id="team-head"></div>
		<div "nav-headers" id="contact-head"></div>
	</div>
	<div class="top-navbar" style="position: absolute; z-index:5;">
		<div class="top-navbar-bdiv" style="margin-right:5%; border-right:1px solid white;";>
			<a class="other-sites" href= "../tech/index.php"> <div class="topnavbutton">Square Infinity Tech</div></a>
		</div>
		<div class="top-navbar-bdiv">
			<a class="other-sites" href="http://blog.squareinfinity.com"><div class="topnavbutton">Square Infinity Blog</div></a>
		</div>
	</div>
	<div class="main-navbar" style="position: absolute; z-index:1;">
		<img src="img/gamebanner.png" style="width:100%; height:230%;" />
	</div>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<img src="img/placeholder1.png" style="display: block; width: 100%;"/>
		<img src="img/placeholder2.png" style="display: block; width: 100%;"/>
		<img src="img/placeholder3.png" style="display: block; width: 100%;"/>
		<img src="img/placeholder4.png" style="display: block; width: 100%;"/>
		<img src="img/placeholder5.png" style="display: block; width: 100%;"/>
		<img src="img/placeholder6.png" style="display: block; width: 100%;"/>
		<img src="img/placeholder7.png" style="display: block; width: 100%;"/>
	</div>
	
	<div id="hidden-link" style="z-index: 1;"></div>
</body>
<script>
	$('#home-head').click(function() {
		window.location.href = "index.php";
		
	});
	
	$('#games-head').click(function() {
		window.location.href = "games.php";
		
	});
	
	$('#team-head').click(function() {
		window.location.href = "team.php";
		
	});
	
	$('#hidden-link').click(function() {
		window.location.href = "hidden.php";
		
	});
	
</script>
</html>