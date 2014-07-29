<!DOCTYPE html>

<html>
	<head>
		<?php include "main.php";
			getHead("Square Infinity Portfolio");
		?>
		
		<script>
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
		
			changeTabTo = function(newTab){
				var skillsInformation = document.getElementById("skills-information");
				var teamInformation = document.getElementById("team-information");
				var servicesInformation = document.getElementById("services-information");
				var skillsTab = document.getElementById("skills-tab");
				var teamTab = document.getElementById("team-tab");
				var servicesTab = document.getElementById("services-tab");
				
				$(".team-info-tab").hide();
				$(".team-info-tabs").hide();
				$(".services-info-tab").hide();
				$(".services-info-tabs").hide();
				
				skillsInformation.style.display = 'none';
				teamInformation.style.display = 'none';
				servicesInformation.style.display = 'none';
				
				skillsTab.setAttribute("class", "yellow-manila-folder-tab tab-darkened");
				teamTab.setAttribute("class", "yellow-manila-folder-tab tab-darkened");
				servicesTab.setAttribute("class", "yellow-manila-folder-tab tab-darkened");
				
				if(newTab == "skills"){
					
					skillsInformation.style.display = 'block';
					skillsTab.setAttribute("class", "yellow-manila-folder-tab");
					
				}else if(newTab == "team"){
					teamInformation.style.display = 'block';
					teamTab.setAttribute("class", "yellow-manila-folder-tab");
					$(".team-info-tab").show();
					$(".team-info-tabs").show();
					$(".services-info-tab").hide();
					$(".services-info-tabs").hide();
					
				}else if(newTab == "services"){
					servicesInformation.style.display = 'block';
					servicesTab.setAttribute("class", "yellow-manila-folder-tab");
					$(".services-info-tab").show();
					$(".services-info-tabs").show();
					$(".team-info-tab").hide();
					$(".team-info-tabs").hide();
					
				}else{
					skillsInformation.style.display = 'block';	
				}
			}
			
			changeTeamTabTo = function(newTab){
				var teamTabAnimSpeed = 500;
				
				var andrewEagleInformation = $("#andrew-eagle-info");
				var lukeGeikenInformation = $("#luke-geiken-info");
				var davidLindenbaumInformation = $("#david-lindenbaum-info");
				var ivanMattieInformation = $("#ivan-mattie-info");
				var garretMeierInformation = $("#garret-meier-info");
				
				andrewEagleInformation.hide(teamTabAnimSpeed);
				lukeGeikenInformation.hide(teamTabAnimSpeed);
				davidLindenbaumInformation.hide(teamTabAnimSpeed);
				ivanMattieInformation.hide(teamTabAnimSpeed);
				garretMeierInformation.hide(teamTabAnimSpeed);
				
				if (newTab == "andreweagle") {
					andrewEagleInformation.show(teamTabAnimSpeed);
				} else if (newTab == 'lukegeiken') {
					lukeGeikenInformation.show(teamTabAnimSpeed);
				} else if (newTab == 'davidlindenbaum') {
					davidLindenbaumInformation.show(teamTabAnimSpeed);
				} else if (newTab == 'ivanmattie') {
					ivanMattieInformation.show(teamTabAnimSpeed);
				} else if (newTab == 'garretmeier') {
					garretMeierInformation.show(teamTabAnimSpeed);
				} else {
					andrewEagleInformation.show(teamTabAnimSpeed);
				}
			}
			
			changeServiceTabTo = function(newTab){
				var serviceTabAnimSpeed = 500;
				
				var websiteServices = $("#services-website-information");
				var applicationServices = $("#services-app-information");
				var desktopServices = $("#services-desktop-information");
				
				websiteServices.hide(serviceTabAnimSpeed);
				applicationServices.hide(serviceTabAnimSpeed);
				desktopServices.hide(serviceTabAnimSpeed);
				
				if (newTab == "website") {
					websiteServices.show(serviceTabAnimSpeed);
				} else if (newTab == "application") {
					applicationServices.show(serviceTabAnimSpeed);
				} else if (newTab == "desktop") {
					desktopServices.show(serviceTabAnimSpeed);
				} else {
					websiteServices.show(serviceTabAnimSpeed);
				}
			}
			
			$(document).ready(function(){
				changeTabTo("skills");
				changeServiceTabTo("website");
			});
		</script>
	</head>
	<body onload="init();">	
		<?php getTopBar(); ?>
		
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
				To Whom it May Concern:<br />
				<br />
				&nbsp;&nbsp;&nbsp;
				At Square Infinity Technologies, we provide a wide array of software solutions customized to meet your needs.
				With our small team and experience in the cutting edge of software design, Square Infinity Technologies offers
				fast turnaround times, delivering a product which offers a sleek user experience. For each new project we look
				at which elements provide the greatest value. Square Infinity Technologies is open to working on software
				projects of any scope, style, or genre. A few of our specialties are listed below in more detail.<br />
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
		<div class="pencil">
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
				<button id="services-tab" class="yellow-manila-folder-tab tab-darkened" onclick="changeTabTo('services');">Services</button>
			</div>
			<div id="skills-information" class="texture-clean manila-content">
				<div>
					Our team has a wide variety of skills that keep us diverse and able to work well on any project.
					We are always learning new things as well in order to work with any project that may be brought to us.
					Our current specialties are below.
				</div>
				<div id="software-skills" class="texture-clean manila-content-skills" >
					<h2>Software</h2>
					Java<br />
					C#<br />
					C++<br />
					Python<br />
					<br />
					Applications for any and all mobile platforms.
				</div>
				<div id="web-skills" class="texture-clean manila-content-web-skills">
					<h2>Web Development</h2>
					PHP<br />
					Html<br />
					JavaScript<br />
					Css<br />
				</div>
			</div>
			
			
					
			<div id="team-information-canvas">
				<div id="team-info-tab-div" class="team-info-tabs">
					<button id="andrew-eagle-tab" class="team-info-tab" onclick="changeTeamTabTo('andreweagle');">Andrew</button>
					<button id="luke-geiken-tab" class="team-info-tab" onclick="changeTeamTabTo('lukegeiken');">Luke</button>
					<button id="david-lindenbaum-tab" class="team-info-tab" onclick="changeTeamTabTo('davidlindenbaum');">David</button>
					<button id="ivan-mattie-tab" class="team-info-tab" onclick="changeTeamTabTo('ivanmattie');">Ivan</button>
					<button id="garret-meier-tab" class="team-info-tab" onclick="changeTeamTabTo('garretmeier');">Garret</button>
				</div>
				<div id="team-information" class="texture-clean manila-content-team-page">
					
					The Square Infinity Team brings together a diverse collection of skills to work for you. Each member of the team
					brings different skills to the table and each is constantly learning new skills to stay at the cutting edge.
					The team is young, but skilled, consisting of computer science and engineering majors from colleges around the
					country. Below you can find more information regarding the team as individuals.<br />
					<div id="andrew-eagle-info" class= "texture-clean manila-content-team">
					Andrew Eagle, Founder:<br /> <!-- We will want a headshot of each of us... Preferably nice ones... We
									should try to either do them well ourselves or find someone to do them for the
									cheap or free... -->
					One of the founders and partners of Square Infinity Technologies, LLP, Andrew is attending school at the University of Colorado
					at Colorado Springs. Andrew is working toward two majors, a BI in Computer Security and a BI in Game Design and
					Development. He is focused on the development of projects for Square Infinity Games as well as web development.
					</div>
					<div id="david-lindenbaum-info" class="texture-clean manila-content-team" hidden>
					David Lindenbaum, Founder: <br /> <!-- Again, David's Headshot goes here -->
					Remind David to write a professional toned bio and put that here.
					</div>
					<div id="ivan-mattie-info" class="texture-clean manila-content-team" hidden>
					Ivan Mattie, Founder: <br />
					Ivan is a skilled programmer that has been programming for almost a decade throughout middle school, high school,
					and college, designing websites, apps, and programs to do a variety of things. He is passionate about programming
					and designing software, and loves challenges.
					</div>
					<div id="garret-meier-info" class="texture-clean manila-content-team" hidden>
					Garret Meier, Founder: <br />
					Remind Garret to write a professional toned bio and put that here.
					</div>
					<div id="luke-geiken-info" class="texture-clean manila-content-team" hidden>
					Luke Geiken, Head of Web Development: <br />
					Luke Geiken is currently enrolled at Iowa State University in Computer Science. His specialty is custom web design
					and loves to build front end game designs when he is not working on a website. When really busy with work, Luke
					must listen to music in order to maximize the amount of code written in a time period. For this reason, he has
					asked to give a shout-out to Shakira for getting him through the tougher programming days when a single problem
					can take several hours to fix.
					</div>
				</div>
				
			</div>
			<div id="services-information-canvas">
				<div id="service-info-tab-div" class="services-info-tabs">
					<button id="website-services-tab" class="services-info-tab" onclick="changeServiceTabTo('website');">Websites</button>
					<button id="application-services-tab" class="services-info-tab" onclick="changeServiceTabTo('application');">Applications</button>
					<button id="desktop-services-tab" class="services-info-tab" onclick="changeServiceTabTo('desktop');">Desktop</button>
				</div>
				<div id="services-information" class="texture-clean manila-content-service-page">
					
					We can offer help with almost any project. You can read about our services in general here. If you see
					something you like, or want to ask us some questions about what services we provide, go to the Contact page
					and send us an email. If you have a project you want done, you can use our get-a-quote feature on our
					Contact page to tell us a little more about it so we can give you a more accurate price point.<br />
				
					<div id="services-website-information" class="texture-clean manila-content-services" hidden>
						Website Services <br />
						We specialize in making responsive websites that scale dynamically to mobile browsers. We offer easy
						to update platforms so that keeping your website up to date is easy for you to manage. Whether you
						want a website conversion to Wordpress, an update to an old site to make it more modern, or a new
						site built from scratch, our team is more than capable.
					</div>
					<div id="services-app-information" class="texture-clean manila-content-services" hidden>
						Application Services <br />
						We can build apps for any mobile platform. We specialize in Android and iOS apps, but can develop
						for the Windows Phone and Blackberry. We work with multi-platform APIs to make sure that your
						app works well on any platforms you want it to. We can also advise on design of applications
						so that you get the product you deserve.
					</div>
					<div id="services-desktop-information" class="texture-clean manila-content-services" hidden>
						Desktop Services <br />
						We can build software for any operating systems (Windows, OS X and Linux). Our team also has
						experience building custom operating systems in Linux. We will work with you to make sure that the
						end product is what you wanted and runs as you expected on whatever platform you need it on.
					</div>
				</div>
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
