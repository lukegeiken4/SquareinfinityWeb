<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('The Party') ?>

<body >
<?php getMainBar('The Party'); ?>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<div style="width:100%; height:100%; background: #3C70A6; position: relative;">
			<div class="content" style="margin-top:15%; position: absolute;">	
			<div class='profile' style="position:relative;">
				<img src="img/ivanMattie.jpg"/>
				<h1>Ivan Mattie</h1>
				<span style="margin-top:-10px;margin-left:10px;"><a href="https://twitter.com/aeolingamenfel" class="twitter-follow-button" style="left:10px;" data-related="Ivan" data-show-count="true">Follow Ivan</a></span>
				<p style="margin-top:-10px;">
					&nbsp;&nbsp;&nbsp&nbsp;Hello, I am a Computer Science major at the University of Colorado, at Colorado Springs. My major passions are telling stories and writing code, so naturally Square 
					Infinity is an extension of of these passions. My goal is to design cool, interesting new software and applications, as well as design interesting games. I have a lot of ideas I would love
					to share with the world, and with the team I'm with, I'm sure anything is possible. I hope to further games as a new, powerful medium for art and complex narrative. I also love the outdoors,
					reading, writing, and generally being with cool people doing interesting things.
				</p>
			</div>
		</div>
		</div>
		<div style="width:100%; height:100%; background: #FF704E; position: relative;">
			<div class="content" style="margin-top:15%; position: absolute;">	
			<div class='profile' style="position:relative;">
				<img src="img/davidLindenbaum.jpg"/>
				<h1>David <span style="font-size:40px">Lindenbaum</span></h1>
				<span style="margin-top:-10px;margin-left:10px"><a href="https://twitter.com/Da5id2701" class="twitter-follow-button" style="left:10px" data-related="David" data-show-count="true">Follow David</a></span>
				<p style="margin-top:-10px;">
					&nbsp;&nbsp;&nbsp&nbsp;I am a Computer Science major at Carnegie Mellon University. I have a long-standing passion for writing code, and above all I love a challenge. Square Infinity gives
					me constant opportunities to challenge myself with interesting projects and produce real, useful products at the same time. I am excited to explore new technologies and create unique
					applications and games with the rest of the team. I have particular experience with Android and Java development, as well as a very strong background in algorithms and theoretical computer
					science. When I am not programming, I enjoy the outdoors, reading sci-fi, gaming.
				</p>
			</div>
		</div>
		</div>
		<div style="width:100%; height:100%; background: #3C70A6; position: relative;">
			<div class="content" style="margin-top:15%; position: absolute;">	
			<div class='profile' style="position:relative;">
				<img src="img/andrewEagle.jpg" />
				<h1>Andrew Eagle</h1>
				<span style="margin-left:10px;margin-top:-10px"><a href="https://twitter.com/ace_the_eagle" class="twitter-follow-button" style="left:10px" data-related="Andrew" data-show-count="true">Follow Andrew</a></span>				
				<p style="margin-top:-10px;">
					&nbsp;&nbsp;&nbsp;&nbspI am currently studying Game Design as well as Computer Security in the University of Colorado at Colorado Springs' Bachelor of Innovation program. My goal with Square Infinity is to 
					not only produce quality software for utility, but also to design and produce games that tell interesting, meaningful stories in new ways. I hope that I can change the way people think
					about games for the better and help to hasten their acceptance into a wider range of arts. I met the rest of the team while attending Billings West High School and although we are now
					spread across a country, we are more than capable of high quality work.
				</p>
			</div>
		</div>
		</div>
		<div style="width:100%; height:100%; background: #FF704E; position: relative;">
			<div class="content" style="margin-top:15%; position: absolute;">	
			<div class='profile' style="position:relative;">
				<img src="img/garretMeier.jpg"/>
				<h1>Garret Meier</h1>
				<span style="margin-top:-10px;margin-left:10px"><a href="https://twitter.com/headin_thecloud" class="twitter-follow-button" style="left:10px" data-related="Garret" data-show-count="true">Follow Garret</a></span>
				<p style="margin-top:-10px;">
					&nbsp;&nbsp;&nbsp;&nbsp;Hi, I'm currently a freshman studying Software Engineering and Philosophy at Iowa State University. If you want to learn more about me personally have a look at 
					<a href="http://ghmeier.public.iastate.edu" target="_blank">my website</a>. I can't wait to see what the team can do with Square Infinity. Right now, helping other
					companies express themselves through technology really makes me excited to get to work on every unique project. I am currently working mostly on web design and Android
					projects for Square Infinity. My passion for the future comes from the amazing ability to utilize games as an art form to influence players through our story. Other than programming, I
					really enjoy spending my time enjoying great clouds, blogging, and reading.
				</p>
			</div>
		</div>
		</div>
	</div>
	
	<div id="hidden-link" style="z-index: 1;"></div>
</body>
<script>
	$('#home-head').click(function() {
		window.location.href = "index.php";
		
	});
	
	$('#games-head').click(function() {
		window.location.href = "games.php";
		
	});
	
	$('#contact-head').click(function() {
		window.location.href = "contact.php";
		
	});
	
	$('#hidden-link').click(function() {
		window.location.href = "hidden.php";
		
	});
	
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){
			js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);
		}
	}(document, 'script', 'twitter-wjs');
	
</script>
</html>