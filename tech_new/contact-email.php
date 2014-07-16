<!DOCTYPE html>

<html>
	<head>
		<?php include "main.php";
			getHead("Square Infinity Portfolio");
		?>
		<link href="contact-email.css" rel="stylesheet" type="text/css" />
		<script>
			$(document).ready(function(){
				$("#name-text").keyup(function(){
					$("#name-area").text($("#name-text").val());
				});
			});
			
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
	</head>
	<body onload="init();">	
		<?php getTopBar(); ?>
		
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