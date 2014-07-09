<html>
<?php

$return = $_GET['page'];

if($return == "contact"){
	getHead("Contact Square Infinity");
	echo "<body>";
	getTopBar();
	getMainContent("Feel free to contact us. Find emails below or connect over social media. (this is where social media links go)<br>
		       For contracts and quotes:  contracts@squareinfinity.com<br>
		       For general questions and information: tech.contact@squareinfinity.com");
	echo "</body>";
} else if ($return  == "portfolio"){
	getHead("Square Infinity Projects");
	echo "<body>";
	getTopBar();
	getSideBar("portfolio");
	getPortfolioPageContent();
	echo "</body>";
} else{
	getHead("Square Infinity Technologies");
	echo "<body>";
	getTopBar();
	getSideBar("main");
	getMainContent(getFrontPageContent());
	getProjectSpecificsContent();
	echo "</body>";
}

function getHead($titleName){
	?>
		<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<title><?php echo $titleName; ?></title>
		
		<script>
			function href(location){
				document.location.href = location;
			}
		</script>
		
		<meta name="viewport" content="width=device-width, user-scalable=no">
		
		<!--
		<link rel="shortcut icon" href="img/favicon.gif" />
		<link href="css/sIGamesStylesheet.css" rel="stylesheet" type="text/css"/>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
		<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<meta name = "description" content="As an Independent game creator, the Square Infinity games team is looking to push the limits of storytelling and gameplay from where the best games are created, our parent's basement."/>
		<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.png"/>
		<meta property="og:site_name" content="Square Infinity Technologies"/>
		<meta property="og:title" content="Square Infinity Games"/>
		<meta property="og:url" content = "http://www.squareinfinity.com/"/> <!-- change this before release -->
		
		<link href="style.css" rel="stylesheet" type="text/css" />
		</head>
	<?php
}

function getTopBar(){
	?>
	<div class="top-bar shadow">
			
	</div>
	<div class="mobile-div">
		<button class="top-nav-button nav-button-start-left" onclick="href('http://dev.squareinfinity.com/tech/?page=portfolio')">PORTFOLIO</button>
		<button class="top-nav-button" onclick="href('http://dev.squareinfinity.com/tech/?page=contact')">CONTACT</button>
	</div>
	<div class="center-image-container shadow">
		<a href="http://dev.squareinfinity.com/tech">
		<img class="center-image" src="http://squareinfinity.com/images/stretchLogo3.png" />
		</a>
	</div>
	<?php
}

function getMainContent($someData){
?>
<div class="main-content top-division">
		<?php echo $someData; ?>
	</div>
<?php
}

function getFrontPageContent(){
	return "At Square Infinity Technologies, we provide a wide array of software solutions customized to meet your needs.
	With our small team and experience in the cutting edge of software design, Square Infinity Technologies offers fast turnaround times
	while delivering a product that includes a sleek user experience. For each project we take an individual look at which elements
	provide the greatest value to the specific project. Square Infinity Technologies is open to working on software projects of any
	scope, style, or genre. A few of our specialties are listed below in more detail.";
}

function getProjectSpecificsContent(){
?>
<div class="main-content">
	<h1 class="main-content-header" id="web-design">Web Design</h1>
	This is where we will talk about all of the web desing things we do! Like PHP! And HTML! And JavaScript! Who knew that we were so
	talented! Anyway, we could even talk about some basic price points if we wanted to here... But I don't really know if that is necessary.
	<h1 class="main-content-header" id="software-design">Software Design</h1>
	This is where I will talk about all of the software things that we do! Like android, iOS, 
</div>
<?php
}

function getPortfolioPageContent(){
?>
<div class="main-content top-division">
<h1 class="main-content-header" id="project-one">Project One Name</h1>
This is where we will have a blurb and also images associated with each project that we can list in our portfolio. So yeah.
It will have the link and stuff like screenshots.
<h1 class="main-content-header" id="project-two">Project Two Name</h1>
And here we will talk about project two and include more images and links and stuff. Then below this there will be more projects,
each with a tag and anchor.
</div>
<?php
}

function getSideBar($content){
?>
<div class = "floating-sidebar top-division">
	<?php
		if($content == "main"){
			?>
				<h1 class="mobile-center">Navigation</h1>
				<button class="sidebar-link" onclick="href('http://dev.squareinfinity.com/tech/#web-design')">Web Design</button>
				<button class="sidebar-link" onclick="href('http://dev.squareinfintiy.com/tech/#app-design')">App Design</button>
			<?php
		}else if($content == "portfolio"){
			?>
				<h1 class ="mobile-center">Navigation</h1>
				<button class="sidebar-link" onclick="href('http://dev.squareinfinity.com/tech/?page=portfolio#project-one')">Project One</button>
				<button class="sidebar-link" onclick="href('http://dev.squareinfinity.com/tech/?page=portfolio#project-two')">Project Two</button>
			<?php
		}
	?>
</div>
<?php
}

function getFrontPageSideBarContent(){
	return '
	<h1 class="mobile-center">Navigation</h1>
	<button class="sidebar-link">Web Design</button>
	<button class="sidebar-link">App Design</button>';
}
function getPortfolioSideBarContent(){
	return '
	<h1 class ="mobile-center">Navigation</h1>
	<button class="sidebar-link">Project 1</button>
	<button class="sidebar-link">Project 2</button>';
}
?>
</html>