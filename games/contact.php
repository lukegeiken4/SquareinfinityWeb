<!DOCTYPE html>

<html>

<head>
	<title>Square Infinity Games</title>
	<link rel="shortcut icon" href="img/favicon.gif" />
	<link href="css/sIGamesStylesheet.css" rel="stylesheet" type="text/css"/>
	<!--<link href="../css/topNavbarStyle.css" rel="stylesheet" type="text/css">-->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="magnific-popup.css"> 
	<!-- Magnific Popup core JS file -->
	<script src="jquery.magnific-popup.js"></script> 
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
		<img src="img/placemarker.png" style="position: absolute; width:8%; height:40%; top:53%; left:70%;" />
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
		<img src="img/gamebanner2.png" style="width:100%; height:230%;" />
	</div>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<div style="width:100%; height:100%; background: #FFB84E; position: relative;">
			<div class="socialMedia" style="height:100%; width:50%;right:0px;top:150px;position:absolute">
				<a href="https://www.facebook.com/squareInfinityTech" target="_blank"><div class="social" style="background-image: url(img/46-facebook.svg); top:0%; left:40%;"></div></a>
				<a href="http://www.twitter.com/squareInfinity" target="_blank"><div class="social" style="background-image: url(img/45-twitter.svg); top:25%; left:10%;"></div></a>
				<a href="https://plus.google.com/103430757959795440005" target="_blank"><div class="social" style="background-image: url(img/80-google-plus.svg); top:50%; left:40%;"></div></a>
				<a href="http://www.linkedin.com/company/square-infinity-technologies?report%2Esuccess=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf" target="_blank"><div class="social" style="background-image: url(img/51-linkedin.svg); top:25%; left:70%;"></div></a>
			</div>
			<div class="socialMedia" style="height:100%; width:50%;left:0px;top:150px;position:absolute">
				<img src="img/following.png" style="width:90%; height:75%; margin-left:10px;" />
			</div>
		</div>
		<div style="width:100%; height:100%; background: #4BF5BE; position: relative;">
			<div class="socialMedia" style="height:100%; width:50%;left:0px;position:absolute">
				<div style="width:50%;left:0px;margin-left:20%; margin-top: 40%;">
					<?php
					// display form if user has not clicked submit
					if (!isset($_POST["submit"])){
					?>			
						<form name="contactform" method="post" action="" autocomplete="off" onsubmit="return validateForm()">
							<div style="width:50%; position: relative;  margin-top: 10%;">
								<h2 style="position: absolute; font-family: Copperplate;" >Name: </h2>
								<input style="position: absolute; margin-left:80%; margin-top:15%; width: 100%;" type="text" name="name" required/><br>
							</div>
							
							<div style="width:50%; position: relative; margin-top: 10%;">
								<h2 style="position: absolute; font-family: Copperplate;">Email: </h2>
								<input style="position: absolute; margin-left:80%;  margin-top:15%; width: 100%;" type="text" name="from" required><br>
							</div>
							
							<div style="width:50%; position: relative; margin-top: 10%;">
							  <h2 style="position: absolute; font-family: Copperplate;">Message: </h2>
							  <textarea style="margin-top:35%;" rows="10" cols="50" name="message" style="resize:vertical" ></textarea><br>
							</div>
							
							<div style="width:50%; position: relative;  margin-top: 10%; margin-left: 30%;">
								<input id="contact-submit" type="submit" name="submit" value="Message Us">
							</div>
						</form>
					<?php 
					}else{
						$from = filter_var($_POST['from'],FILTER_SANITIZE_EMAIL); // sender
						if (filter_var($_POST['from'],FILTER_VALIDATE_EMAIL)) {
							$name  = filter_var(strip_tags($_POST['name']),FILTER_SANITIZE_STRING);
							$subject = "Contact from " . strip_tags($_POST['name']);
							$message = filter_var(strip_tags($_POST['message']),FILTER_SANITIZE_STRING);
							$message = wordwrap($message, 70);
							// send mail
							mail("contact@squareinfinity.com",$subject,$message,$from);
						}
						?>
						<div>
							<img src="img/thankyou.png" style="width:90%; height:75%; margin-left:10px;" />
						</div>
						<?php
					}?>
				</div>
			</div>
			<div class="socialMedia" style="height:100%; width:50%;right:0px;position:absolute">
				<img src="img/contactus.png" style="width:90%; height:75%; margin-right:10px; position: absolute; top: 20%" />
			</div>
		</div>	
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
	
	function validateForm() {
		var name = document.forms["contactform"]["name"].value;
		var from = document.forms["contactform"]["from"].value;
		var message = document.forms["contactform"]["message"].value;
		
		if (name == null || name == "") {
		    alert("Name Must Be Filled Out");
		    return false;
		}
		if (from == null || from == "") {
		    alert("Please Put Your Email");
		    return false;
		}
		if (message == null || message == "") {
		    alert("Make Sure You Put Your Message");
		    return false;
		}
		
		return true;
	}

	
</script>
</html>