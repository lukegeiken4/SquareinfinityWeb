<?php function getHead( $name ){ ?>
<html>
<head>
	<title><?php echo $name ?> | SI Games</title>
	<link rel="shortcut icon" href="img/favicon.gif" />
	<link href="css/sIGamesStylesheet.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<meta name = "description" content="As an Independent game creator, the Square Infinity games team is looking to push the limits of storytelling and gameplay from where the best games are created, our parent's basement."/>
	<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.PNG"/>
	<meta property="og:site_name" content="Square Infinity Games"/>
	<meta property="og:title" content="Square Infinity Games"/>
	<meta property="og:url" content = "http://www.squareinfinity.com/"/>
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="magnificPopup/magnificPopup.css"> 
	<!-- Magnific Popup core JS file -->
	<script src="magnificPopup/jquery.magnificPopup.js"></script>
</head>
</html>
<?php } ?>

<?php function getMainBar( $name ) { 
$alignment = 0;
if ($name == 'Headquarters'){
	$alignment = 13;
}else if ($name == 'Games'){
	$alignment = 29;
}else if ($name == 'The Party'){
	$alignment = 63;
}else if ($name == 'Mail'){
	$alignment = 79;
}else {
	$alignment = 113; 
}
?>
<html>
	<div style="position: absolute; width: 100%; height:20%; z-index:5;">
		<div class="nav-headers" id="home-head">HOME</div>
		<img src="img/marker.png" style="position: absolute; width:9%;  top:25%; left:<?php echo $alignment; ?>%;" />
		<div class="nav-headers" id="games-head">GAMES</div>
		<div class="nav-headers" id="about-head"><img src="./img/whitestretchLogo3.png" style="height:100%" /></div>
		<div class="nav-headers" id="team-head">TEAM</div>
		<div class="nav-headers" id="contact-head">CONTACT</div>
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
		<img src="img/gamebanner.png" style="width:100%; height:100%;" />
	</div>
</html>
<?php } ?>