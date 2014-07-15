<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
		<title>Square Infinity Technologies</title>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			$(window).resize(function(){
				resizeEverything();
			});
			
			resizeEverything = function(){
				var width = $(window).width();
			}
		</script>
		<script>		
			function href(location){
				document.location.href = location;
			}
			
			init = function(){
				addAllPaper();
				resizeEverything();
			}
			
			addAllPaper = function(){ // add paper to 'paper' class
				var elems = document.getElementsByTagName('*'), i;
				for (i in elems) {
					if((' ' + elems[i].className + ' ').indexOf(' ' + "paper" + ' ') > -1) {
						var paper1 = document.createElement("div");
						var paper2 = document.createElement("div");
						
						paper1.setAttribute("class", "paper_foo1");
						paper1.setAttribute("name", "paper");
						paper2.setAttribute("class", "paper_foo2");
						paper2.setAttribute("name", "paper");
						
						elems[i].appendChild(paper1);
						paper1.appendChild(paper2);
					}
				}
			}
		</script>
		
		<meta name="viewport" content="width=device-width, user-scalable=no">
		
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> <!-- FontAwesome stuff -->
		
		<link rel="shortcut icon" href="img/favicon.gif" />
		<link href="css/sIGamesStylesheet.css" rel="stylesheet" type="text/css"/>
		<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<meta name = "description" content="As an Independent game creator, the Square Infinity games team is looking to push the limits of storytelling and gameplay from where the best games are created, our parent's basement."/>
		<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.png"/>
		<meta property="og:site_name" content="Square Infinity Technologies"/>
		<meta property="og:title" content="Square Infinity Games"/>
		<meta property="og:url" content = "http://www.squareinfinity.com/"/> <!-- change this before release -->
		
		<link href="3d.css" rel="stylesheet" type="text/css" />
		<link href="contact.css" rel="stylesheet" type="text/css" />
	</head>
	<body onload="init();">	
		<div class="top-bar shadow" id="top-bar">
			&nbsp;
		</div>
		<div class="mobile-div">
			<button class="top-nav-button nav-button-start-left shadow" onclick="href('?page=portfolio')">PORTFOLIO</button>
			<button class="top-nav-button shadow" onclick="href('?page=contact')">CONTACT</button>
		</div>
		<div class="center-image-container shadow">
			<a href="index.php">
			<img class="center-image" src="http://squareinfinity.com/images/stretchLogo3.png" />
			</a>
		</div>
		
		<!-- CONTENT STARTS HERE -->
		
		<div class="contact-content">
			<div class="buisness-card">
				<img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/1622236_799251740088618_564838846_n.jpg" class="buisness-card-image" />
				<div class="buisness-card-title">
					Ivan Mattie
				</div>
				<div class="buisness-card-subtitle">
					Founder
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						ivan.mattie@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (406) 281-2279<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (406) 281-2279
				</div>
			</div>
			<div class="buisness-card">
				<img src="https://scontent-b-sea.xx.fbcdn.net/hphotos-xpf1/t1.0-9/1280485_10201995087748762_276940508_n.jpg" class="buisness-card-image" />
				<div class="buisness-card-title">
					Andrew Eagle
				</div>
				<div class="buisness-card-subtitle">
					Founder
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						andrew.eagle@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (222) 333-4444<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
				</div>
			</div>
		</div>
	</body>
</html>