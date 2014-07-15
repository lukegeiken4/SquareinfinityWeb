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
				3945 Woodcreek Drive<br />
				Billings, MT, 59106-9695<br/ >
				<br />
				Our Future Customer<br />
				Anywhere<br />
				AnyCity, Terra, Milky Way<br/ >
				<br />
				To Whom it May Concern:<br />
				&nbsp;&nbsp;&nbsp;
				At Square Infinity Technologies, we provide a wide array of software solutions customized to meet your needs.
				With our small team and experience in the cutting edge of software design, Square Infinity Technologies offers
				fast turnaround times while delivering a product that delivers a sleek user experience. For each project we take
				an individual look at which elements provide the greatest value to the specific project. Square Infinity
				Technologies is open to working on software projects of any scope, style, or genre. A few of our specialties
				are listed below in more detail.<br />
				<br />&nbsp;&nbsp;&nbsp;
				If you want more information about what we do, including quotes on projects go to the Contact page. If you want
				to see a few of the projects we have worked on, go to the Portfolio. There you can view screenshots and information
				about projects we have finished.
				<br />
				<br />
				Sincerely,<br /><br />
				Square Infinity Tech.<br />
				& its Team
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
				Our team has a wide variety of skills that keep us diverse and able to work well on any project.
				We are always learning new things as well in order to keep us with any project that may be brought to us.
				Our current specialties are below.
				<br />
				Software:<br />
				Java<br />
				C#<br />
				C++<br />
				Python<br />
				<br />
				Applications for any and all mobile platforms.
				<br />
				Web Development:<br />
				PHP<br />
				Html<br />
				JavaScript<br />
				Css<br />
				
			</div>
			<div id="team-information" class="texture-clean manila-content">
				The Square Infinity Team brings together a diverse collection of skills to work for you. Each member of the team
				brings different skills to the table and each is constantly learning new skills to stay at the cutting edge.
				The team is young, but skilled, consisting of computer science and engineering majors from colleges around the
				country. Below you can find more information regarding the team as individuals.<br />
				Andrew Eagle, Founder:<br /> <!-- We will want a headshot of each of us... Preferably nice ones... We
								should try to either do them well ourselves or find someone to do them for the
								cheap or free... -->
				One of the founders and partners of Square Infinity Technologies, LLP, Andrew is attending school at the University of Colorado
				at Colorado Springs. Andrew is working toward two majors, a BI in Computer Security and a BI in Game Design and
				Development. He is focused on the development of projects for Square Infinity Games as well as web development.
				<br />
				David Lindenbaum, Founder: <br /> <!-- Again, David's Headshot goes here -->
				Remind David to write a professional toned bio and put that here.
				<br />
				Ivan Mattie, Founder: <br />
				Remind Ivan to write a professional toned bio and put that here.
				<br />
				Garret Meier, Founder: <br />
				Remind Garret to write a professional toned bio and put that here.
				<br />
				Luke Geiken, Head of Web Development: <br />
				Remind Luke to write a professional toned bio and put that here.
				<br />
			</div>
			<div id="results-information" class="texture-clean manila-content">
				hello these are words about our results...I don't know, I wanted a third tab for god's sake.
				WHAT DOES THIS TAB MEAN?????????? But seriously, think about what to put here.
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
