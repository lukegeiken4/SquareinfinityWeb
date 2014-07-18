<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('Mail') ?>

<body style="overflow-y:visible;">
	
	<div id="contact-main-div" style="overflow-x:hidden;overflow-y:visible;">
		<?php getMainBar('Mail'); ?>
		<div id="contact-mail-div">
			<div class="socialMedia" id="contact-area">
				<div id="contact-mail-form" >
					<?php
					// display form if user has not clicked submit
					if (!isset($_POST["submit"])){
					?>			
						<form name="contactform" method="post" action="" autocomplete="off" onsubmit="return validateForm()">
							<h1 style="color:white;text-align:center;">Questions? Suggestions?</h1>
							<div style="width:50%; position: relative;  margin-top: 10%;">
								<h2 style="position: absolute; font-family: 'Ubuntu',sans-serif; color: white;" >Name: </h2>
								<input style="position: absolute; margin-left:80%;  margin-top:22px; width: 100%;" type="text" name="name" required/><br>
							</div>
							
							<div style="width:50%; position: relative; margin-top: 10%;">
								<h2 style="position: absolute; font-family: 'Ubuntu',sans-serif;  color: white;">Email: </h2>
								<input style="position: absolute; margin-left:80%; margin-top:22px; width: 100%;" type="text" name="from" required><br>
							</div>
							
							<div style="width:100%; position: relative; margin-top: 10%;">
							  <h2 style="position: absolute; font-family: 'Ubuntu',sans-serif;  color: white;">Message: </h2>
							  <textarea style="margin-top:65px; width:100%;height:100px;" name="message" style="resize:vertical" ></textarea><br>
							</div>
							
							<div style="width:50%; position: relative;  margin-top: 10%; margin-left: 30%;">
								<input style="font-size:30px;" id="contact-submit" type="submit" name="submit" value="Send It!">
							</div>
						</form>
					<?php 
					}else{
						$from = filter_var($_POST['from'],FILTER_SANITIZE_EMAIL); // sender
						if (filter_var($_POST['from'],FILTER_VALIDATE_EMAIL)) {
							$name  = filter_var(strip_tags($_POST['name']),FILTER_SANITIZE_STRING);
							$subject = "Contact from " . strip_tags($_POST['name']);
							$message = filter_var(strip_tags($_POST['message']),FILTER_SANITIZE_STRING);
							$message = wordwrap($message, 70);
							// send mail
							mail("contact@squareinfinity.com",$subject,$message,$from);
						}
						?>
						<div>
							<img src="img/thankyou.png" style="width:90%; height:75%; margin-left:10px;" />
						</div>
						<?php
					}?>
				</div>
			</div>
			<div class="socialMedia" id="social-media-div">
				
				<div id="social-media-box">
					<h1 style="text-align:center">Connect</h1>
					<a href="https://www.facebook.com/squareInfinityTech" target="_blank" style="color:white;text-decoration:none">
						<div class="socialIndividual" style=""> 
							<i class="fa fa-facebook-square fa-5x"></i>
							<h1>Let's be friends</h1>
						</div>
					</a>
					<a href="http://www.twitter.com/squareInfinity" target="_blank" style="color:white;text-decoration:none">
						<div class="socialIndividual" style=""> 
							<i class="fa fa-twitter-square fa-5x"></i>
							<h1>#getUpdates</h1>
						</div>
					</a>
					<a href="https://plus.google.com/103430757959795440005" target="_blank" style="color:white;text-decoration:none">
					<div class="socialIndividual" style=""> 
						<i class="fa fa-google-plus-square fa-5x"></i>
						<h1>You and a tumbleweed.</h1>
					</div>
					</a>
				</div>
			</div>
		</div>	
		<?php getFooter(); ?>
	</div>
	
</body>
<script>
	$('#home-head').click(function() {
		window.location.href = "index.php";
		
	});
	
	$('#games-head').click(function() {
		window.location.href = "games.php";
		
	});
	
	$('#team-head').click(function() {
		window.location.href = "team.php";
		
	});
	
	$('#hidden-link').click(function() {
		window.location.href = "hidden.php";
		
	});
	
	function validateForm() {
		var name = document.forms["contactform"]["name"].value;
		var from = document.forms["contactform"]["from"].value;
		var message = document.forms["contactform"]["message"].value;
		
		if (name == null || name == "") {
		    alert("Name Must Be Filled Out");
		    return false;
		}
		if (from == null || from == "") {
		    alert("Please Put Your Email");
		    return false;
		}
		if (message == null || message == "") {
		    alert("Make Sure You Put Your Message");
		    return false;
		}
		
		return true;
	}

	
</script>
</html>