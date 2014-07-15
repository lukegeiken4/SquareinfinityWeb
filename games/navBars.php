<?php function getHead( $name ){ ?>
<html>
<head>
	<title><?php echo $name ?> | SI Games</title>
	<link rel="shortcut icon" href="img/favicon.gif" />
	<link href="css/sIGamesStylesheet.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
}else if ($name == 'Entertainments'){
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
	<div style="position: fixed; width: 100%; height:60px; z-index:5;">
		<div class="nav-headers" id="home-head">HOME</div>
		<img class="marker" src="img/marker.png" style="position: absolute; width:9%; min-width:100px;  top:50px; left:<?php echo $alignment; ?>%;" />
		<div class="nav-headers" id="games-head">GAMES</div>
		<div class="" id="about-head">
			<img src="./img/logoBanner.png" style="position:absolute;width:20%; min-width:190px; z-index:-5; display: block;"/>
			<img src="./img/stretchLogo3.png" style="position:absolute;width:20%; min-width:190px; z-index:10; display: block; margin-top:25px; margin-left: auto; margin-right: auto" />
		</div>
		<div class="nav-headers" id="team-head">TEAM</div>
		<div class="nav-headers" id="contact-head">CONTACT</div>
	</div>
	<div class="top-navbar" style="position: fixed; z-index:5;">
		<div class="top-navbar-bdiv" style="margin-right:5%; border-right:1px solid white;";>
			<a class="other-sites" href= "../tech/index.php"> <div class="topnavbutton">Square Infinity Tech</div></a>
		</div>
		<div class="top-navbar-bdiv">
			<a class="other-sites" href="http://blog.squareinfinity.com"><div class="topnavbutton">Square Infinity Blog</div></a>
		</div>
	</div>
	<div class="main-navbar" style="position: fixed; z-index:1;">
		<img class="main-navbar-back" src="img/gamebanner.png" style="width:100%; height:100%;" />
	</div>
	<div id="marker-div">
		<img class="marker" id="hover-marker" src="img/marker.png" style="position: absolute; width:9%; min-width:100px; top:50px; left: 79%;" />	
	</div>
</html>
<?php } ?>

<?php function getFooter(){ ?>
<html>
	<div style="width:100%; height:200px; background: black;">
		<div style="position: absolute; right: 10px;">
			<form method="post" action="http://scripts.dreamhost.com/add_list.cgi">
				<input type="hidden" name="list" value="lexicon" />
				<input type="hidden" name="domain" value="squareinfinity.com" />
				<input type="hidden" name="emailconfirmurl" value="_http://localhost/~lucasgeiken/squareinfinity/SquareinfinityWeb/mailinglist/subscribe.php" />
				<input type="hidden" name="unsuburl" value="_http://localhost/~lucasgeiken/squareinfinity/SquareinfinityWeb/mailinglist/subscribe.php" />
				    <!-- Optional: -->
				<!--
				<input type="hidden" name="alreadyonurl" value="_http://AlreadyOnURL_" />
				<input type="hidden" name="notonurl" value="_http://NotOnURL_" />
				<input type="hidden" name="invalidurl" value="_http://InvalidURL_" />
				<input type="hidden" name="emailit" value="1" />
				Name: <input type="text" name="name" />-->
				
				    <!-- Required: -->
				<div style="display: inline-block;">
					<h2 style="color:white;">Subscribe to our newsletter!</h2>
					<h2 style="color:white; position: absolute;">E-mail: <input id="newletter-input" type="text" name="email" /></h2><br />
				</div>
				<div style="display: inline-block;">
					<!-- Optional: -->
				    <!--Confirm E-mail: <input type="text" name="address2" /><br />-->
				    
					<!-- Required: -->
				    <input type="submit" name="submit" value="Sign Up" id="newsletter-button"/>
				</div>
				    <!-- Optional: -->
				<input type="submit" name="unsub" value="Unsubscribe" />
			
			    <!-- Required: -->
			</form>
		</div>
	</div>
</html>
<?php } ?>