<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
		<title>Square Infinity Technologies</title>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			resizeEverything = function(){
				var width = $(window).width();
			}
		
			$(window).resize(function(){
				resizeEverything();
			});
			
			$(document).ready(function(){
				$("#name-text").keyup(function(){
					$("#name-area").text($("#name-text").val());
				});
			});
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
			
			rotateFolds = function(){
				rotateX("#top-fold", -45);
				rotateX("#bottom-fold", 45);
			}
			
			rotateX = function(objectName, amount){			
				if(amount < 0){
					for(var x=0; x>amount; x--){
						var amountToWait = Math.abs(x * 500);
						console.log(x + ", " + amountToWait);
						
						setTimeout(function(){
							$(objectName).css("-webkit-transform", "rotateX(" + x + "deg)");
						}, amountToWait);
					}
				}else if(amount > 0){
					for(var x=0; x<amount; x++){
						var amountToWait = Math.abs(x * 500);
					
						setTimeout(function(){
							$(objectName).css("-webkit-transform", "rotateX(" + x + "deg)");
						}, amountToWait);
					}
				}
			
				//$(objectName).css("-webkit-transform", "rotateX(" + amount + "deg)");
			}
		</script>
		
		<meta name="viewport" content="width=device-width, user-scalable=no">
		
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> <!-- FontAwesome stuff -->
		
		<link rel="shortcut icon" href="img/favicon.gif" />
		<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<meta name = "description" content="As an Independent game creator, the Square Infinity games team is looking to push the limits of storytelling and gameplay from where the best games are created, our parent's basement."/>
		<meta property="og:image" content="http://www.squareinfinity.com/gmeier/images/stretchLogo3.png"/>
		<meta property="og:site_name" content="Square Infinity Technologies"/>
		<meta property="og:title" content="Square Infinity Games"/>
		<meta property="og:url" content = "http://www.squareinfinity.com/"/> <!-- change this before release -->
		
		<link href="3d.css" rel="stylesheet" type="text/css" />
		<link href="contact-email.css" rel="stylesheet" type="text/css" />
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
	
		<div class="top-info">
			Send Us a Letter
		</div>
	
		<div class="view">
			<div id="top-fold" class="top-fold fold-size fold-color-top">
				<input type="text" id="name-text" placeholder="Your name" /><br />
				<input type="text" id="email-text" placeholder="Your email" /><br />
				<br />
				Square Infinity Technologies<br />
				The Internet<br />
			</div>
			<div id="center-fold" class="center-fold fold-size">
				To Whom it May Concern:<br />
				<textarea rows="10" columns="20" placeholder="Your message to us..." class="center-text-area"></textarea>
			</div>
			<div id="bottom-fold" class="bottom-fold fold-size fold-color-bottom">
				Sincerely,
				<br /><br />
				<div id="name-area">
					&nbsp;
				</div>
			</div>
		</div>
		<button onclick="rotateFolds();">Send Message</button>
	</body>
</html>