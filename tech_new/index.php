<html>
<?php
$return = "";

if(isset($_GET['page'])){
	$return = $_GET['page'];
}

if($return == "contact"){
	getHead("Contact Square Infinity");
} else if ($return  == "portfolio"){
	getHead("Square Infinity Projects");
} else{
	getHead("Square Infinity Technologies");
}

echo "<body>";

if($return == "contact"){
	getTopBar();
	getMainContent("contact");
}else if($return == "portfolio"){
	getTopBar();
	getSideBar("portfolio");
	getPortfolioPageContent();
}else{
	getTopBar();
	getSideBar("main");
	getMainContent("main-page");
	getProjectSpecificsContent();
}

echo "</body>";

getPageBottom();

return;

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
		
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> <!-- FontAwesome stuff -->
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
		<button class="top-nav-button nav-button-start-left" onclick="href('?page=portfolio')">PORTFOLIO</button>
		<button class="top-nav-button" onclick="href('?page=contact')">CONTACT</button>
	</div>
	<div class="center-image-container shadow">
		<a href="index.php">
		<img class="center-image" src="http://squareinfinity.com/images/stretchLogo3.png" />
		</a>
	</div>
	<?php
}

function getPageBottom(){
	?>
		<div class="footer">
			<div>
				&copy;Square Infinity Technologies, 2014 | <a href="http://google.com/">LEGAL</a>
			</div>
		</div>
	<?php
}

function getMainContent($someData){
?>
<div class="main-content top-division">
		<?php 
			if($someData == "main-page"){
				getFrontPageContent();
			}else if($someData == "contact"){
				getContactContent();
			}
		?>
	</div>
<?php
}

function getContactContent(){
	?>
		Feel free to contact us. Find emails below or connect over social media. (this is where social media links go)<br>
		For contracts and quotes:  contracts@squareinfinity.com<br>
		For general questions and information: tech.contact@squareinfinity.com
	<?php
}

function getFrontPageContent(){
	?>
		<div class="fa-float-top">
			<i class="fa fa-globe fa-2x"></i>
		</div>
		<div class="front-page-top-content">
			At Square Infinity Technologies, we provide a wide array of software solutions customized to meet your needs.
			With our small team and experience in the cutting edge of software design, Square Infinity Technologies offers fast turnaround times
			while delivering a product that includes a sleek user experience. For each project we take an individual look at which elements
			provide the greatest value to the specific project. Square Infinity Technologies is open to working on software projects of any
			scope, style, or genre. A few of our specialities are listed below in more detail.
		</div>
	<?php
}

function getProjectSpecificsContent(){
?>
<!--<div class="main-content">
	<h2 id="web-design"><i class="fa fa-check-circle-o fa-extra-spacing"></i>Web Design</h1>
	<div class="center-content">
		<h2>Dynamic Coding</h2>
		<i class="fa fa-desktop fa-2x fa-extra-spacing"></i><i class="fa fa-laptop fa-2x fa-extra-spacing"></i><i class="fa fa-mobile fa-2x fa-extra-spacing"></i>
	</div>
	
</div>-->
<div class="design-area main-content">
	<div class="circle" style="left:0px">
		<div style="color: #444444">
		<i class="fa fa-desktop fa-2x fa-extra-spacing"></i>
		<i class="fa fa-laptop fa-2x fa-extra-spacing"></i>
		<i class="fa fa-mobile fa-2x fa-extra-spacing"></i>
		</div>
		<h3 id="dynamic-coding">DYNAMIC CODING</h3>
		<div class="circle-content">
			<i class="fa fa-users fa-small-spacing" style="color: #ff6600;"></i>In a world full of differing technologies and standards in the hands of your customers,
			you must design for any possible device or screen size.<br />
			<i class="fa fa-check-circle" style="color: #0062ff;"></i> At Square Infinity, 
			we work hard to make your content look great no matter who is viewing it.
		</div>
	</div>
	
	<div class="circle">
		<div style="color: #444444;">
			<i class="fa fa-group fa-2x"></i>
		</div>
		<h3 id="various-skills">VARIOUS SKILLS</h3>
		<div class="circle-content">
			<i class="fa fa-users fa-small-spacing" style="color: #ff6600;"></i>In today's ever growing tech sector, knowledge of
			multiple languages & technologies is a must to design & build for existing customer bases.<br />
			<i class="fa fa-check-circle fa-small-spacing" style="color: #0062ff;"></i>Square Infinity hires
			a variety of skills in modern web, mobile, and desktop application design.
		</div>
	</div>
</div>
<?php
}

function getFooter(){
	?>
		<footer>
			Footer words
		</footer>
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
	
	<div class="portfolio-container">
		<div class="portfolio-main">
			<div class="portfolio-center">
				<i class="fa fa-globe fa-2x"></i>
			</div>
			<h4>Bare Mountain Outdoors</h4><h5><a href="http://baremountainoutdoors.com/">baremountainoutdoors.com</a></h5>
			<div class="portfolio-object">
				Here is some text and maybe an image about Bare Mountain Outdoors.
			</div>
		</div>
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
				<button class="sidebar-link" onclick="href('#dynamic-coding')">Dynamic Coding</button>
				<button class="sidebar-link" onclick="href('#various-skills')">Various Skills</button>
			<?php
		}else if($content == "portfolio"){
			?>
				<h1 class ="mobile-center">Navigation</h1>
				<button class="sidebar-link" onclick="href('#project-one')">Project One</button>
				<button class="sidebar-link" onclick="href('#project-two')">Project Two</button>
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