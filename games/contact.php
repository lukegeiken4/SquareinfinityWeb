<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('Mail') ?>

<body >
	<?php getMainBar('Mail'); ?>
	<div id="contact-main-div">
		<div id="contact-mail-div">
			<div class="socialMedia" id="contact-area">
				<div id="contact-mail-form">
					<?php
					// display form if user has not clicked submit
					if (!isset($_POST["submit"])){
					?>			
						<form name="contactform" method="post" action="" autocomplete="off" onsubmit="return validateForm()">
							<div style="width:50%; position: relative;  margin-top: 10%;">
								<h2 style="position: absolute; font-family: Copperplate; color: white;" >Name: </h2>
								<input style="position: absolute; margin-left:80%; margin-top:15%; width: 100%;" type="text" name="name" required/><br>
							</div>
							
							<div style="width:50%; position: relative; margin-top: 10%;">
								<h2 style="position: absolute; font-family: Copperplate;  color: white;">Email: </h2>
								<input style="position: absolute; margin-left:80%;  margin-top:15%; width: 100%;" type="text" name="from" required><br>
							</div>
							
							<div style="width:100%; position: relative; margin-top: 10%;">
							  <h2 style="position: absolute; font-family: Copperplate;  color: white;">Message: </h2>
							  <textarea style="margin-top:25%; width:100%;height:100px;" name="message" style="resize:vertical" ></textarea><br>
							</div>
							
							<div style="width:50%; position: relative;  margin-top: 10%; margin-left: 30%;">
								<input style="font-size:90%;" id="contact-submit" type="submit" name="submit" value="Message Us">
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
					<a href="https://www.facebook.com/squareInfinityTech" target="_blank"><div class="social" id="facebook-pic" style="background-image: url(img/46-facebook.svg) "></div></a>
					<a href="http://www.twitter.com/squareInfinity" target="_blank"><div class="social" id="twitter-pic" style="background-image: url(img/45-twitter.svg);"></div></a>
					<a href="https://plus.google.com/103430757959795440005" target="_blank"><div class="social" id="googleplus-pic" style="background-image: url(img/80-google-plus.svg);"></div></a>
					<div style="position: relative; margin-left: 30%; margin-top:50%;">
						<h2 id="follow-text" style="font-family: Copperplate; font-size: 40px;">Follow Us!</h2>
					</div>
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