<?php include('navBars.php'); ?>
<!DOCTYPE html>

<html>
<?php getHead('Entertainments') ?>

<body >
<?php getMainBar('Entertainments'); ?>
	
	<div style="position: absolute; overflow: auto; width:100%; height:100%; top:0; z-index: 0;">
		<div class="games_div" id="travelquest">
			<div class="games_div_opacity" style="position:absolute;">

			</div>
			<div style="z-index:10;width:100%;height:250px;background:url('./img/tqBanner.png') no-repeat center center;background-size:100% auto;">
				
			</div>
			<!--<div class="gamesTitle" id="TravelQuestTitle">
				TravelQuest
			</div>-->
			
			<div class="buttons">
				<div class="button TravelQuestDesc " id="one"><i class="fa fa-bars fa-5x fa-fw" style="line-height:100px;vertical-align:center"></i></div>
				<div class="button TravelQuestDesc " id="two"><i class="fa fa-book fa-5x fa-fw" style="line-height:100px;vertical-align:center"></i></div>
				<div class="button TravelQuestDesc " id="three"><i class="fa fa-bookmark fa-5x fa-fw" style="line-height:100px;vertical-align:center"></i></div>
			</div>
			<div class="contents">
				<div class="gamesInfo TravelQuestDesc" id="one">
					<div style="width:400px">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Fill up on gas and find your sunglasses because you don't have to 
						be near Chicago to get the full road trip experience with our latest project. With TravelQuest,
						we aim to give mobile gaming a touch of community. 
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;TravelQuest takes the formula of a traditional 2D roleplaying-game with
						the exception that instead of moving your character with a joystick, your position in game
						corresponds to your geographical location. With over 200 enemies tailored to appear in specific
						regions around the globe, TravelQuest offers a different experience no matter your location. 
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Whether you're in your home town or halfway across the world, the randomly
						generated quests aim to get you to walk down the street and check out your local coffee shop or 
						make a weekend trip through the countryside. 
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Take your mobile gaming to the road with TravelQuest, where the game world
						is the one we live in.
					</p>
					</div>
					
				</div>
				<div class="gamesInfo TravelQuestDesc" id="two">
					<div style="width:400px">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Oooh more info.
					</p>
					</div>
					
				</div>
				<div class="gamesInfo TravelQuestDesc" id="three">
					<div style="width:400px">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Added this real slick like
					</p>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="games_div" id="losthope">
			<div class="games_div_opacity">

			</div>
			<div style="z-index:10;width:100%;height:250px;background:url('./img/tqBanner.png') no-repeat center center;background-size:100% auto;">
				
			</div>
			<div class="buttons">
				<div class="button LostHopeDesc " id="one"><i class="fa fa-bars fa-5x fa-fw" style="line-height:100px;vertical-align:center"></i></div>
				<div class="button LostHopeDesc " id="two"><i class="fa fa-book fa-5x fa-fw" style="line-height:100px;vertical-align:center"></i></div>
				<div class="button LostHopeDesc " id="three"><i class="fa fa-bookmark fa-5x fa-fw" style="line-height:100px;vertical-align:center"></i></div>
			</div>
			<div class="contents">
				<div class="gamesInfo LostHopeDesc" id="one">
					<div style="width:400px">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Fill up on gas and find your sunglasses because you don't have to 
						be near Chicago to get the full road trip experience with our latest project. With TravelQuest,
						we aim to give mobile gaming a touch of community. 
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;TravelQuest takes the formula of a traditional 2D roleplaying-game with
						the exception that instead of moving your character with a joystick, your position in game
						corresponds to your geographical location. With over 200 enemies tailored to appear in specific
						regions around the globe, TravelQuest offers a different experience no matter your location. 
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Whether you're in your home town or halfway across the world, the randomly
						generated quests aim to get you to walk down the street and check out your local coffee shop or 
						make a weekend trip through the countryside. 
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Take your mobile gaming to the road with TravelQuest, where the game world
						is the one we live in.
					</p>
					</div>
					
				</div>
				<div class="gamesInfo LostHopeDesc" id="two">
					<div style="width:400px">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Oooh more info.
					</p>
					</div>
					
				</div>
				<div class="gamesInfo LostHopeDesc" id="three">
					<div style="width:400px">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;Added this real slick like
					</p>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="games_div" id="utterdark">
			<div class="games_div_opacity">
				
			</div>
			<div class="gamesContent" id="UtterDarkContent">
				utter dark
			</div>
		</div>
		
		<div class="games_div" id="droidsnake">
			<div class="games_div_opacity">
				
			</div>
			<div class="gamesContent" id="DroidSnakeContent">
				droidsnake
			</div>
		</div>
		<?php getFooter(); ?>
	</div>
</body>
<script>
	var lastClicked = $("#one");
	$('#home-head').click(function() {
		window.location.href = "index.php";
		
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
	
	$(document).ready(function(){
		$("#one").siblings().darken({'percent': 40});
		$(".gamesInfo" ).siblings("#one").siblings().hide();
		$(".gamesInfo" ).siblings("#one").siblings().css({marginTop:'-200px',height:'200px'});
		
		$(".button").click(function(){
			if (!$(this).is(lastClicked)){
				$(this).lighten({'percent':66});
				lastClicked.darken({'percent':40});
				lastClicked = $(this);
				$(".gamesInfo" ).siblings('#'+$(this).attr('id')).show();
				$(".gamesInfo" ).siblings('#'+$(this).attr('id')).css({zIndex:'-1'});
				$(".gamesInfo" ).siblings('#'+$(this).attr('id')).siblings().css({zIndex:"-2"});
				$(".gamesInfo" ).siblings('#'+$(this).attr('id')).animate({marginTop:'0px',height:'500px'},1000,function(){
				$(".gamesInfo" ).siblings('#'+$(this).attr('id')).siblings().css({marginTop:"-200px",height:'200px'});
				$(".gamesInfo" ).siblings('#'+$(this).attr('id')).siblings().hide();
				});
			}
		});
		
	});
	
	
</script>
</html>