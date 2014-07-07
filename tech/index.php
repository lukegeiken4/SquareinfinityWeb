<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Square Infinity Tech</title>
	<link rel="shortcut icon" href="images/favicon.gif" />
	<link href="css/squareInfinityStylesheet.css" rel="stylesheet" type="text/css"/>
	<link href="../css/topNavbarStyle.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<meta name = "description" content="Square Infinity Technologies LLP is a limited liability partnership specializing in software design and production. We are a small team, but we are already working alongside several other 
			groups on many projects for organizations across the country."/>
	<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.png"/>
	<meta property="og:site_name" content="Square Infinity Tech"/>
	<meta property="og:title" content="Square Infinity Tech"/>
	<meta property="og:url" content = "http://www.squareinfinity.com/"/>
	<script>	
	var numProjects = 3;
	var currentProject = 0;
	var prevProject = 3;
	var nextProject = 1;
	var projects = new Array("LostHope","UtterDark","TakeTheTower");
	var proficiencies = new Array("Websites","Android/iOS Apps"," Web Hosting","Game Development");
	var numProf = 4;
	var currentProf = 0;
	var time = Date.now();
	var hasPressed = false;
	
	$(document).ready(function() {
	document.getElementById("helpwith").innerHTML=proficiencies[currentProf];
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

		$("#LostHope").siblings().css("left","100%");
		
		$(".social").hover( function() {
			$(this).css('box-shadow','2px 2px 10px white');
		}, function() {
			$(this).css('box-shadow','2px 2px 10px black');
		});
		
		$(".navbutton").hover(function() {
			$(this).css('background-color','#494a4a');
			$(this).css('color','#FFFFFF');
		},function() {
			$(this).css('background-color','transparent');
			$(this).css('color','#000000');
		});
		
		$(".projectButton").hover(function() {
			$(this).css('background-color','#494a4a');
			$(this).css('color','#FFFFFF');
		},function() {
			$(this).css('background-color','transparent');
			$(this).css('color','#000000');
		});

		$(".navbutton").click(function() {	
			$('html,body').stop();	
			var disId = $(this).attr("id");
			$('html, body').animate({scrollTop: $("#"+disId+"Stuff").offset().top-129},1000);
		});
		
		setInterval( function() {
			if (time+9000<Date.now() && !hasPressed) {
				switchProject();
				time = Date.now();
			}		
			if (time+90000<Date.now()) {
				hasPressed = false;
				time = Date.now();
			}
		},10000);

		
		setInterval ( function() {
			currentProf++;
			if (currentProf>=numProf) {
				currentProf = 0;
			}
			document.getElementById("helpwith").innerHTML=proficiencies[currentProf];
		},10000);
	});
	
		function switchProject() {
			hasPressed = true;
			if (time+1000<Date.now()) {
				time = Date.now();
				currentProject++;
				prevProject = currentProject-1;
				nextProject = currentProject+1;
				if (currentProject>=numProjects) {
					currentProject = 0;
					prevProject = numProjects-1;
					nextProject = 1;
				}
				
				$("#"+projects[currentProject]).siblings().stop();
				$("#"+projects[currentProject]).stop();
				$("#"+projects[nextProject]).stop();
				$("#"+projects[prevProject]).animate({left:"100%",opacity:"0.0"},1000);			
				$("#"+projects[currentProject]).show().css("left","-100%").animate({left:"0%",opacity:"1.0"},1000);	
			}
		}
		
		function backProject() {
			hasPressed = true;
			if (time+1000<Date.now()) {
				time = Date.now();
				currentProject--;
				prevProject = currentProject+1;
				nextProject = currentProject-1;
				if (currentProject<0) {
					currentProject = numProjects-1;
					prevProject = 0;
					nextProject = numProjects-2;
				}			
				$("#"+projects[currentProject]).siblings().stop();
				$("#"+projects[currentProject]).stop();
				$("#"+projects[nextProject]).stop();
				$("#"+projects[prevProject]).animate({left:"-100%",opacity:"0.0"},1000);			
				$("#"+projects[currentProject]).show().css("left","100%").animate({left:"0%",opacity:"1.0"},1000);
			}
		}
	</script>

</head>

<body>

	<div class="top-navbar">
		<a  href= "../games/index.php"> <div class="topnavbutton">Square Infinity Games</div></a>
		<a href="http://blog.squareinfinity.com"><div class="topnavbutton">Square Infinity Blog</div></a>
	</div>
	
	<div class="navbar">
		<img src="images/stretchLogo3.png" style="height:100px; float:right;box-shadow:none;"/>
		<div class="navbutton" id="home">Home</div>
		<div class="navbutton" id="project" >Projects</div>	
		<div class="navbutton" id="about" >About</div>		
		<div class="navbutton" id="contact" >Contact</div>
	</div>
<div class="container">	
	<div class="content" id="homeStuff" >	
		<div class="headBar" style="background-color:#929292;">Home</div>
		<div class="content" style="background: url(images/WelcomeBackground.jpg) no-repeat center top fixed;">
			<div style="background-color:transparent;width:100%;">
				<h1 style="margin-top:10px;">We can help with <span id="helpwith"></span>.</h1>
			</div>
			<div style="float:left;width:40%;background-color:transparent">
			<h1 style="margin:0;margin-top:20px">Who are we?</h1>	
				<p style="padding-top:10px">
				&nbsp;&nbsp;&nbsp;&nbsp;Square Infinity Technologies LLP is a limited liability partnership specializing in software design and production. We are a small team, but we are already working alongside several other 
				groups on many projects for organizations across the United States. Check out some of the projects we have worked on, get to know the team, and check out some of our future projects using the tabs
				across the top.
				</p>
			</div>
			<div style="float:right;width:60%;background-color:transparent;">
				<h1 style="margin:0px;margin-top:20px;"> What can we do for you?</h1>
				<p style="padding-top:10px;border-left:2px solid black">
					&nbsp;&nbsp;&nbsp;&nbsp;At Square Infinity we are passionate about technology and innovation. We have experience developing in Android, iOS, Java, Web tools, and more. We'd love to help create any product in mind and are always willing
					to learn to tools for the job. If there's a problem you need solved, we can find the solution and get a superior product out to you. Check out our past projects and send us an email. 
				</p>
			</div>
		<img src="images/SILogo.png" style="width:270px;display:block;margin-left:auto;margin-right:auto;box-shadow:none;margin-top:350px;"/>
		</div>
	</div>
	
	<div class="content" id="projectStuff" style="background: url(images/ProjectContent.jpg) no-repeat center center fixed;height:550px;">
		<div class="headBar" style="background-color:#929292;" >Projects</div>
		<div class="projectButton" onclick="switchProject()"> <h1 style = "display:block;margin-top:275px;margin-bottom:auto"> < </h1> </div>
		<div class="projectButton" onclick="backProject()" style="right:0px"> <h1 style="display:block;margin-top:275px;margin-bottom:auto"> > </h1> </div>
		<div>
			
			<div class="projContent" id="LostHope">
				
				<h1>Lost Hope</h1>
				<p>
					<img src="https://scontent-b.xx.fbcdn.net/hphotos-frc3/t1/385225_575948972419532_1585616576_n.jpg" style = "float:left;height:300px;margin:10px"/>
					Lost Hope is a free form, world exploration RPG. <img src="images/lostHopeTitle.jpg" style="float:right;width:300px;margin:15px;"/>Taking a fresh 
					perspective on the world building games, Lost Hope allows the player to create their own templates and designs for new weapons, extravagant spells
					and useful tools. As players progress they gain more and more potential for modifying their templates until they can create truly new items. There
					is a whole world to explore, filled with dangerous enemies and mysterious locales.
				</p>
			</div>
			<div class="projContent" id="UtterDark">
				
				<h1>Utter Dark</h1>
				<p>
					Utterdark is a horror-inspired first-person shooter. <img src = "images/UDLogo0.jpg" style="float:right;width:300px;margin:15px;"/>The pitch black
					combat and constant threat of detection should make players think before acting,
					slowing down and strategizing before leaping into the fray. All soldiers are equipped with sonar HUDs that translate nearby sound into visual input, 
					however, the comfort (and danger) of a flashlight is only a button-press away. Players will experience round based combat across a variety of maps, 
					each with unique objectives and features, each round players will earn money that can be spent on new weapons and equipment for the following rounds.

				</p>
			</div>
			<div class="projContent" id="TakeTheTower">
				
				<h1>Take the Tower</h1>
				<p>
				<img src="images/takethetowerlogo.png" style="border-radius:63px;float:left;height:300px;margin-right:15px;"/>
					For fans and non-fans of the renowned University of Texas alike, keep tabs on the latest happenings at the university with Take the Tower. An Android
					and iOS application developed for Bryte Networks, Take the Tower provides notifications of the current status of the University of Texas Tower from the
					comfort of the app. Soon to be released on both the Apple and Google Play stores, keep an eye out for our first app release and be sure to find out more
					from the Tower's <a href="htttps://www.facebook.com/takethetower">facebook</a> page.
				</p>
			</div>
			<!--<div class="projContent" id="WebDesign">
				<h1>SO i can internetz gud.</h1>
			</div>-->
		</div>
	</div>
	
	<div class="content" id="aboutStuff" style="background:url(images/AboutImage.jpg) no-repeat center center fixed;background-size:cover;">
		<div class="headBar" style="background-color:#929292;">Meet the Team</div>
			<div class="content">	
			<div class='profile' style="right:0;margin-top:0px;">
				<img src="images/andrewEagle.jpg" />
				<h1>Andrew Eagle</h1>
				<span style="margin-left:10px;margin-top:-10px"><a href="https://twitter.com/ace_the_eagle" class="twitter-follow-button" style="left:10px" data-related="Andrew" >Follow Andrew</a></span>				
				<p style="margin-top:-10px">
					&nbsp;&nbsp;&nbsp;&nbspI am currently studying Game Design as well as Computer Security in the University of Colorado at Colorado Springs' Bachelor of Innovation program. My goal with Square Infinity is to 
					not only produce quality software for utility, but also to design and produce games that tell interesting, meaningful stories in new ways. I hope that I can change the way people think
					about games for the better and help to hasten their acceptance into a wider range of arts. I met the rest of the team while attending Billings West High School and although we are now
					spread across a country, we are more than capable of high quality work.
				</p>
			</div>
			<div class='profile' style="position:relative;">
				<img src="images/ivanMattie.jpg"/>
				<h1>Ivan Mattie</h1>
				<span style="margin-top:-10px;margin-left:10px;"><a href="https://twitter.com/aeolingamenfel" class="twitter-follow-button" style="left:10px;" data-related="Ivan" >Follow Ivan</a></span>
				<p style="margin-top:-10px">
					&nbsp;&nbsp;&nbsp&nbsp;Hello, I am a Computer Science major at the University of Colorado, at Colorado Springs. My major passions are telling stories and writing code, so naturally Square 
					Infinity is an extension of of these passions. My goal is to design cool, interesting new software and applications, as well as design interesting games. I have a lot of ideas I would love
					to share with the world, and with the team I'm with, I'm sure anything is possible. I hope to further games as a new, powerful medium for art and complex narrative. I also love the outdoors,
					reading, writing, and generally being with cool people doing interesting things.
				</p>
			</div>
		
			<div class='profile' style="right:0;">
				<img src="images/garretMeier.jpg"/>
				<h1>Garret Meier</h1>
				<span style="margin-top:-10px;margin-left:10px"><a href="https://twitter.com/headin_thecloud" class="twitter-follow-button" style="left:10px" data-related="Garret" >Follow Garret</a></span>
				<p style="margin-top:-10px;">
					&nbsp;&nbsp;&nbsp;&nbsp;Hi, I'm currently a freshman studying Software Engineering and Philosophy at Iowa State University. If you want to learn more about me personally have a look at 
					<a href="http://ghmeier.public.iastate.edu" target="_blank">my website</a>. I can't wait to see what the team can do with Square Infinity. Right now, helping other
					companies express themselves through technology really makes me excited to get to work on every unique project. I am currently working mostly on web design and Android
					projects for Square Infinity. My passion for the future comes from the amazing ability to utilize games as an art form to influence players through our story. Other than programming, I
					really enjoy spending my time enjoying great clouds, blogging, and reading.
				</p>
			</div>
			<div class='profile' style="position:relative;">
				<img src="images/davidLindenbaum.jpg"/>
				<h1>David <span style="font-size:40px">Lindenbaum</span></h1>
				<span style="margin-top:-10px;margin-left:10px"><a href="https://twitter.com/Da5id2701" class="twitter-follow-button" style="left:10px" data-related="David" >Follow David</a></span>
				<p style="margin-top:-10px">
					&nbsp;&nbsp;&nbsp&nbsp;I am a Computer Science major at Carnegie Mellon University. I have a long-standing passion for writing code, and above all I love a challenge. Square Infinity gives
					me constant opportunities to challenge myself with interesting projects and produce real, useful products at the same time. I am excited to explore new technologies and create unique
					applications and games with the rest of the team. I have particular experience with Android and Java development, as well as a very strong background in algorithms and theoretical computer
					science. When I am not programming, I enjoy the outdoors, reading sci-fi, gaming.
				</p>
			</div>
		</div>
	</div>
	
	<div class="content" id="contactStuff"  style="background:url(images/ContactImage.jpg) no-repeat center center fixed;height:500px;">
		<div class="headBar" style="background-color:#929292;"> Contact Us </div>		
		<div class = "contactContent" style = "margin-left:20px">
			<?php
			// display form if user has not clicked submit
			if (!isset($_POST["submit"])){
			?>
				<h1>Stay In Touch</h1>
			<div style="width:50%;left:0px;margin-right:0px">			
				<form method="post" action="" autocomplete="off">
					<div style="width:50%;float:left;">
						<h2>Name: </h2><input type="text" name="name" required/><br>
					</div>
					<div style="width:50%;position:absolute;left:25%">
						<h2>Email Address: </h2><input type="text" name="from" required><br>
					</div>
					<div style="float:left;">
					  <h2>Message: </h2><textarea rows="10" cols="50" name="message" style="resize:vertical" ></textarea><br>
					  <input type="submit" name="submit" value="Send">
					</div>
				</form>
			<?php 
			}else{
			// Check if the "from" input field is filled out
			if (isset($_POST['from'])){
				$from = filter_var($_POST['from'],FILTER_SANITIZE_EMAIL); // sender
				if (filter_var($_POST['from'],FILTER_VALIDATE_EMAIL)) {
					$name  = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
					$subject = "Contact from " . $_POST['name'];
					$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
					$message = wordwrap($message, 70);
					// send mail
					mail("contact@squareinfinity.com",$subject,$message,$from);
					echo "Thank you for sending us feedback";
				}
			} else {
				echo "invalid email";
			}
			}?>
			</div>
			<div class="socialMedia" style="width:50%;right:0px;top:150px;position:absolute">
				<p>Follow our social media profiles to stay up to date on the latest projects and happenings at <strong>Square Infinity</strong>.
				There is always something new happening, and we have some truly amazing projects in the works!</p>
				<a href="https://www.facebook.com/squareInfinityTech" target="_blank"><div class="social" style="background-image: url(images/46-facebook.svg)"></div></a>
				<a href="http://www.twitter.com/squareInfinity" target="_blank"><div class="social" style="background-image: url(images/45-twitter.svg)"></div></a>
				<a href="https://plus.google.com/103430757959795440005" target="_blank"><div class="social" style="background-image: url(images/80-google-plus.svg)"></div></a>
				<a href="http://www.linkedin.com/company/square-infinity-technologies?report%2Esuccess=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf" target="_blank"><div class="social" style="background-image: url(images/51-linkedin.svg)"></div></a>
			</div>
		</div>
	</div>
	<div class="footer" style="margin-top:-15px;">
		<h3 style="color:#FFFFFF">Square Infinity Technologies 2014</h3>
	</div>
	
</div>

</body>
</html>


