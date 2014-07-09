<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php
	function custom_echo($text) {
		if(strlen($text)<=330)
		{
		  return array($text, false);
		}
		else
		{
		  $new_text=substr($text,0,330) . '...';
		  return array($new_text, true);
		}
	}
?>
<?php getHead('Headquarters'); ?>
<body>
	<?php getMainBar('Headquarters'); ?>
	
	<div style="position: absolute; width:100%; height:100%; top:0; z-index: 0; background: #e6dcbf;min-width:500px;">
		<div class="content" id="projectStuff" style="height:250px;">
		<div class="projectButton" onclick="switchProject()"> <!--<h1 style = "display:block;margin-top:275px;margin-bottom:auto"> < </h1>--> </div>
		<div class="projectButton" onclick="backProject()" style="right:0px"> <!--<h1 style="display:block;margin-top:275px;margin-bottom:auto"> > </h1>--> </div>
		<div style="height:100%;width:100%;overflow-y:visible;">		
			<div class="projContent" id="LostHope">
				<div class="projTitle" id="LostHopeTitle">
				</div>
				<div class="projTitle">
					<h1>Lost Hope</h1>
				</div>
				<div class="projDesc" id="LostHopeDesc"> 
				</div>
				<div class="projDesc">
				<p>
					Lost Hope is a free form, world exploration RPG. Taking a fresh 
					perspective on the world building games, Lost Hope allows the player to create their own templates and designs for new weapons, extravagant spells
					and useful tools. As players progress they gain more and more potential for modifying their templates until they can create truly new items. There
					is a whole world to explore, filled with dangerous enemies and mysterious locales.
				</p>
				</div>
			</div>
			
			<div class="projContent" id="UtterDark">
				<div class="projTitle" id="UtterDarkTitle">	
				</div>
				<div class="projTitle">
					<h1>Utter Dark</h1>
				</div>
				<div class="projDesc" id="UtterDarkDesc">
				</div>
				<div class="projDesc">
				<p>
					Utterdark is a horror-inspired first-person shooter.The pitch black
					combat and constant threat of detection should make players think before acting,
					slowing down and strategizing before leaping into the fray. All soldiers are equipped with sonar HUDs that translate nearby sound into visual input, 
					however, the comfort (and danger) of a flashlight is only a button-press away. Players will experience round based combat across a variety of maps, 
					each with unique objectives and features, each round players will earn money that can be spent on new weapons and equipment for the following rounds.

				</p>
				</div>
			</div>
			<div class="projContent" id="TravelQuest">
				<div class="projTitle" id="TravelQuestTitle" style="width:240px">	
				</div>
				<div class="projTitle">
					<h1>TravelQuest</h1>
				</div>
				<div class="projDesc" id="TravelQuestDesc">
				</div>
				<div class="projDesc">
					<p>
					hey there travelquest!
					</p>
				</div>
			</div>
		</div>
		</div>
		<div class="newsWrapper">
		<div class="newsHeader">
			<h1>News</h1>
		</div>
		<?php
		$hostname = "mysql.squareinfinity.com";   // eg. mysql.yourdomain.com (unique)
		$username = "aeolingamenfel";   // the username specified when setting-up the database
		$password = "@b1237ilol";   // the password specified when setting-up the database
		$database = "si_website";   // the database name chosen when setting-up the database (unique)
		
		$link = mysql_connect($hostname,$username,$password);
		mysql_select_db($database) or die("Unable to select database");
		
		if(!$link) {
			 throw new Exception("unable to connect");
		} else {
			$query = "SELECT * FROM news ORDER BY id DESC;";
			$result = mysql_query($query);
			
			if ( $row = mysql_fetch_assoc ($result)) {
			    $firstRow = $row;
			    mysql_data_seek($result, 0);
			
			    while($row = mysql_fetch_assoc($result)) {
				$id = $row['id'];
				$title = $row['title'];
				$content = $row['content'];
				$date = $row['date'];
				$url = $row['url'];
				?>
				<div class="newsContent" style="">
					<img class="newsImage" src="news_images/<?php echo $url ?>" alt="">
					<h1 style="text-align: center"><?php echo $title; ?></h1>
					<h3 style="text-align: center"><?php echo $date; ?></h3>
					<h2 style="text-align: left; margin-left: 25%;">
					<?php
					$statement = custom_echo($content);
					echo strip_tags($statement[0]);
					if($statement[1]) {
						?>
						<a class="simple-ajax-popup-align-top" href="news_images/fullStory.php?id=<?php echo $id ?>"> Read More</a><br>
						<?php
					}
					?></h2>
				</div>
				<?php
			    }
			}
		}	
		?>
		</div>
		
		<div style="width:100%; padding-bottom:10%;">
			<h1 style="text-align: center">Footer</h1>
		</div>
	</div>
	<div id="hidden-link" style="z-index: 1;"></div>
</body>
<script>
	var numProjects = 3;
	var currentProject = 0;
	var prevProject = 3;
	var nextProject = 1;
	var projects = new Array("LostHope","UtterDark","TravelQuest");
	var time = Date.now();
	var hasPressed = false;
	
	$(document).ready(function() {
	
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

			$("#LostHope").siblings().css("left","100%");
			$("#LostHope").siblings().hide();
			
			
			$(".projectButton").hover(function() {
				$(this).css('background-color','#494a4a');
				$(this).css('color','#FFFFFF');
			},function() {
				$(this).css('background-color','transparent');
				$(this).css('color','#000000');
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
		
		
		$('.simple-ajax-popup-align-top').magnificPopup({
			type: 'ajax',
			alignTop: true,
			overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
		});
	});
	

	$('#games-head').click(function() {
		window.location.href = "games.php";
	});
		
	$('#team-head').click(function() {
		window.location.href = "team.php";
		
	});
	
	$('#contact-head').click(function() {
		window.location.href = "contact.php";
		
	});
	
	$('#hidden-link').click(function() {
		window.location.href = "hidden.php";
		
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
				$("#"+projects[prevProject]).animate({left:"100%",opacity:"1.0"},1000);	
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
				$("#"+projects[prevProject]).animate({left:"-100%",opacity:"1.0"},1000);				
				$("#"+projects[currentProject]).show().css("left","100%").animate({left:"0%",opacity:"1.0"},1000);
			}
	}
	
</script>
</html>