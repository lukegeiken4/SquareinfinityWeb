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
				
				if(width < 1075){
					$("#blueprint").hide(500);
				}else{
					$("#blueprint").show(500);
				}
				
				if(width >= 950){
					$("#ipad").show(500);
					$("#buisness-card").show(500);
				
					var slowSpeedOffset = ((1920 - width) / 5);
					
					$("#ipad").css("margin-left", 50 - slowSpeedOffset + "px");
					$("#coffee").css("margin-right", 100 - slowSpeedOffset + "px");
					$("#buisness-card").css("margin-right", (350 - ((1920 - width) / 2)) + "px");
					if(parseInt($("#buisness-card").css("margin-right")) < 0){
						// holds the buisness card on the edge
						$("#buisness-card").css("margin-right", 0);
					}
					$("#blueprint").css("margin-right", (-300 - ((1920 - width) / 3)) + "px");
				}else if(width < 875){
					$("#ipad").hide(500);
				}else if(width < 950){
					$("#buisness-card").hide(500);
				}
				
				if(width < 855){
					$("#folder").css("width", "100%");
				}else{
					$("#folder").css("width", "850px");
				}
				
				if(width < 395){
					$('div[name=paper]').css("width", "100%");
				}else{
					$("div[name=paper]").css("width", "380px");
				}
			}
		</script>
		<script>		
			function href(location){
				document.location.href = location;
			}
			
			init = function(){
				addAllPaper();
				changeTabTo("skills");
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
			
			changeTabTo = function(newTab){
				var skillsInformation = document.getElementById("skills-information");
				var teamInformation = document.getElementById("team-information");
				var resultsInformation = document.getElementById("results-information");
				var skillsTab = document.getElementById("skills-tab");
				var teamTab = document.getElementById("team-tab");
				var resultsTab = document.getElementById("results-tab");
				
				skillsInformation.style.display = 'none';
				teamInformation.style.display = 'none';
				resultsInformation.style.display = 'none';
				
				skillsTab.setAttribute("class", "yellow-manila-folder-tab tab-darkened");
				teamTab.setAttribute("class", "yellow-manila-folder-tab tab-darkened");
				resultsTab.setAttribute("class", "yellow-manila-folder-tab tab-darkened");
				
				if(newTab == "skills"){
					skillsInformation.style.display = 'block';
					skillsTab.setAttribute("class", "yellow-manila-folder-tab");
				}else if(newTab == "team"){
					teamInformation.style.display = 'block';
					teamTab.setAttribute("class", "yellow-manila-folder-tab");
				}else if(newTab == "results"){
					resultsInformation.style.display = 'block';
					resultsTab.setAttribute("class", "yellow-manila-folder-tab");
				}else{
					skillsInformation.style.display = 'block';
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
		
		<div class="header-area">			
			<!--<div class="stage-left texture-clean side-callout">
				Welcome to Square Infinity
			</div>-->
		</div>
		<br />
		<div class="paper paper-shadow" name="paper">
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
		<div class="ipad side-spacing-1" id="ipad">
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
		<div class="coffee side-spacing-1" id="coffee">
			&nbsp;
		</div>
		<br />
		<!--<div class="buisness-card" id="buisness-card">
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
		</div>-->
		
		<div class="yellow-manila-folder" id="folder">
			<div>
				<button id="skills-tab" class="yellow-manila-folder-tab" onclick="changeTabTo('skills');">Skills</button>
				<button id="team-tab" class="yellow-manila-folder-tab tab-darkened" onclick="changeTabTo('team');">Team</button>
				<button id="results-tab" class="yellow-manila-folder-tab tab-darkened" onclick="changeTabTo('results');">Results</button>
			</div>
			<div id="skills-information" class="texture-clean manila-content">
				hello these are words about our skills
			</div>
			<div id="team-information" class="texture-clean manila-content">
				hello these are words about our team
			</div>
			<div id="results-information" class="texture-clean manila-content">
				hello these are words about our results...I don't know, I wanted a third tab for god's sake.
			</div>
		</div>
		
		<div class="blueprint" id="blueprint">
			&nbsp;
		</div>
		
		<!-- RETIRED PAPER TYPE
		<div class="paper2 texture-clean">
			paper2 information
		</div>-->
	</body>
</html>
