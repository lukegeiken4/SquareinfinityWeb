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
		  $new_text=substr($text,0,330) . ' . . . ';
		  return array($new_text, true);
		}
	}
?>
<?php getHead('Headquarters'); ?>
<body>
	<?php getMainBar('Headquarters'); ?>
	
	<div style="position: absolute; width:100%; height:100%; top:0; z-index: 0; min-width:500px;">
		<div class="content" id="projectStuff" style="height:250px;">
		<div class="projectButton" onclick="switchProject()"><i class="fa fa-chevron-left fa-2x"></i> </div>
		<div class="projectButton" onclick="backProject()" style="right:0px"> <i class="fa fa-chevron-right fa-2x"></i></div>
		<div style="height:100%;width:100%;">		
			<div class="projContent" id="LostHope">
				<div class="projTitle" id="LostHopeTitle">
				</div>
				<div class="projTitle">
					<h1>Lost Hope</h1>
				</div>
				<div class="projDesc transparent" id="LostHopeDesc"> 
				</div>
				<div class="projDesc">
				<p>
					Enter a desolate, broken world in this 2D, 16-bit game. Build, dig, and explore
					to find what this world lost.
				</p>
				</div>
				<div class="projButton hoverable" id="LostHopeButton">
					<i class="fa fa-plus"> </i>
					Go Deeper
				</div>
			</div>
			
			<div class="projContent" id="UtterDark">
				<div class="projTitle" id="UtterDarkTitle">	
				</div>
				<div class="projTitle">
					<h1>Utter Dark</h1>
				</div>
				<div class="projDesc " id="UtterDarkDesc">
				</div>
				<div class="projDesc">
				<p>
					Plunged into darkness, you have only the sounds of footsteps and the
					occasional flash of light to find your enemies.
					Gear up and embrace the shadows.
				</p>
				</div>
				<div class="projButton hoverable" id="UtterDarkButton">
					<i class="fa fa-plus"> </i>
					Avert Eyes
				</div>
			</div>
			<div class="projContent" id="TravelQuest">
				<div class="projTitle" id="TravelQuestTitle">	
				</div>
				<div class="projTitle">
					<h1>TravelQuest</h1>
				</div>
				<div class="projDesc  transparent" id="TravelQuestDesc">
				</div>
				<div class="projDesc">
					<p>
					Grab your friends and hit the road to explore the world or your home
					town while taking on vicious Steampunk monsters in our upcoming mobile
					adventure RPG.
					</p>
				</div>
				<div class="projButton hoverable" id="TravelQuestButton">
					<i class="fa fa-plus"> </i>
					Explore
				</div>
			</div>
			<div class="projContent" id="DroidSnake">
				<div class="projTitle" id="DroidSnakeTitle">	
				</div>
				<div class="projTitle">
					<h1>Droid Snake</h1>
				</div>
				<div class="projDesc transparent" id="DroidSnakeDesc">
				</div>
				<div class="projDesc">
					<p>
					A throw back to the Square Infinity of years past
					</p>
				</div>
				<div class="projButton hoverable" id="DroidSnakeButton">
					<i class="fa fa-plus"> </i>
					Score More
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
				$imageType = $row['image_type'];//0 is portrait, 1 is landscape
				?>
				<div class="newsContent" style="">
					<div class="newsTitle <?php if ($imageType == 1) { echo 'full';}else if ($imageType==0){echo 'right';}?>"><?php echo $title; ?></div>
					<div class="newsDate <?php if ($imageType == 1) { echo 'full';}else if ($imageType==0){echo 'right';}?>"> <?php echo $date; ?> </div>
					<div class="newsImage-<?php if ($imageType == 1) { echo 'full';}else if ($imageType==0){echo 'left';}?>" style="background-image:url('news_images/<?php echo $url ?>')" alt=""></div>
					
					
					<div class="newsDesc <?php if ($imageType == 1) { echo 'full';}else if ($imageType==0){echo 'right';}?>">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
					$statement = custom_echo($content);
					echo strip_tags($statement[0]);
					if($statement[1]) {
						?>
						<a class="simple-ajax-popup-align-top" href="news_images/fullStory.php?id=<?php echo $id ?>"> Read More</a><br>
						<?php
					}
					?></div>
				</div>
				<?php
			    }
			}
		}	
		?>
		</div>
		
		<?php getFooter(); ?>
	</div>
</body>
<script>
	var numProjects = 4;
	var currentProject = 0;
	var prevProject = 4;
	var nextProject = 1;
	var projects = new Array("TravelQuest","LostHope","UtterDark","DroidSnake");
	var time = Date.now();
	var hasPressed = false;
	
	$(document).ready(function() {
	
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

			$("#TravelQuest").siblings().css("left","100%");
			$("#TravelQuest").siblings().hide();
			
			
			$(".projectButton").hover(function() {
				//$(this).css('background-color','#494a4a');
				$(this).css('color','#FFFFFF');
			},function() {
				//$(this).css('background-color','transparent');
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
	
	$('#LostHopeButton').click(function(){
		window.location.href = "games.php#losthope";
	});
	
	$('#UtterDarkButton').click(function(){
		window.location.href = "games.php#utterdark";
	});
	
	$('#TravelQuestButton').click(function(){
		window.location.href = "games.php#travelquest";
	});
	
	$('#DroidSnakeButton').click(function(){
		window.location.href = "games.php#droidsnake";
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
				$("#"+projects[currentProject]).show().css("left","-100%").animate({left:"0%",opacity:"1.0"},1000 ,function() {$("#"+projects[prevProject]).hide();});
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
				$("#"+projects[currentProject]).show().css("left","100%").animate({left:"0%",opacity:"1.0"},1000,function() {$("#"+projects[prevProject]).hide();});
			}
	}
	
</script>
</html>