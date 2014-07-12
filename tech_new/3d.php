<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
		<title>Square Infinity Technologies</title>
		
		<script>			
			function href(location){
				document.location.href = location;
			}
			
			addAllPaper = function(){ // add paper to 'paper' class
				var elems = document.getElementsByTagName('*'), i;
				for (i in elems) {
					if((' ' + elems[i].className + ' ').indexOf(' ' + "paper" + ' ') > -1) {
						var paper1 = document.createElement("div");
						var paper2 = document.createElement("div");
						
						paper1.setAttribute("class", "paper_foo1");
						paper2.setAttribute("class", "paper_foo2");
						
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
	</head>
	<body onload="addAllPaper();">	
		<div class="top-bar shadow">
				
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
		
		<div class="header-area">			
			<!--<div class="stage-left texture-clean side-callout">
				Welcome to Square Infinity
			</div>-->
		</div>
		<br />
		<div class="paper paper-shadow">
			<img src="img/Scaled Symbol.png" class="si-symbol"/>
			<br />
			<div class="center-paper-contents">
				Square Infinity Tech.<br/>
				2010 68th Street West<br />
				Billings, MT, 59106-2222<br/ >
				<br />
				Our Future Customer<br />
				Anywhere<br />
				AnyCity, Terra, Milky Way<br/ >
				<br />
				To Whom it May Concern:<br />
				&nbsp;&nbsp;&nbsp;
				We are a really cool company that wants your money because money is cool and also allows us
				to make cool things, so please give us your money and we will make you something cool,
				like this site.<br />
				<br />&nbsp;&nbsp;&nbsp;
				In short, working with us is awesome because we are young, headstrong, and pretty smart, if
				I do say so myself. We can make you cool tech things, including a site like this, cool apps,
				<strike>doomsday weapons,</strike> and other tech stuff.<br />
				<br />
				<br />
				Sincerely,<br /><br /><br /><br /><br /><br />
				Square Infinity Tech.<br />
				& it's Team
			</div>
		</div>
		<br />
		<div class="ipad side-spacing-1">
			<?php
			
			if(isset($_GET["ipad"])){
				?>
				<object data=<?php echo $_GET["ipad"]; ?> class="embedded-site">
					<embed src=<?php echo $_GET["ipad"]; ?> > </embed>
				</object>
				<?php
			}else{
				echo "&nbsp;";
			}			
			?>
		</div>
		<div class="coffee side-spacing-1">
			&nbsp;
		</div>
		<br />
		<div class="buisness-card">
			<div class="buisness-card-title">
				SQUARE INFINITY TECH.
			</div>
			<div class="buisness-card-subtitle">
				Technology Today
			</div>
			<div class="buisness-card-small-line">&nbsp;</div>
			<div class="buisness-card-bottom">
				<i class="fa fa-building-o"></i>&nbsp;office: +1 (406) 281-2279<br />
				<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
			</div>
		</div>
		
		<!-- RETIRED PAPER TYPE
		<div class="paper2 texture-clean">
			paper2 information
		</div>-->
	</body>
</html>
