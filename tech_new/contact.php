<!DOCTYPE html>

<html>
	<head>
		<?php include "main.php";
			getHead("Square Infinity Portfolio");
		?>
		<link href="contact.css" rel="stylesheet" type="text/css" />
		<script src="js/contact.js"></script>
	</head>
	<body onload="init();">	
		<?php getTopBar(); ?>
		
		<!-- CONTENT STARTS HERE -->
		
		<div class="contact-content">
			<!-- GET A QUOTE -->
		
			<h3>Get a Quote</h3>
			<div class="quote-area">
				<div id="quote-main-form">
					<div class="quote-selector">
						<input type="radio" name="contract-type" value="app" id="contract-type-app"/> I Want an App
					</div>
					<div class="quote-selector">
						<input type="radio" name="contract-type" value="website" id="contract-type-website" /> I Want a Website
					</div>
					<button class="large-button" id="submit-type-button" onclick="selectQuoteType();">Continue</button>
				</div>
				
				<div id="quote-app-area" hidden>
					app woo
				</div>
				
				<div id="quote-web-area" hidden>
					<h1>I Want a Website Made With...</h1>
					<div class="quote-selector">
						<input type="radio" name="site-type" value="wordpress" id="webquote_wordpress" onclick="show('wordpress');" /> WordPress
					</div>
					<div id="quote-wordpress-area" class="web-area-information-box" hidden>
						<div class="information-text">
							<i class="fa fa-question-circle"></i>
							WordPress is a popular open source, free CMS (Content Management System). What it
							lacks in lustre it makes up for in its easy, simple to use interface for installing
							plugins, themes, and extensions. It's easy to add pages, posts, and store media on
							your site with WordPress.
						</div>
						<div class="information-text">
							<i class="fa fa-check-circle"></i> We can make custom extensions, themes, or modify existing
							themes or extensions to make your site wholly yours and easy to edit.
						</div>
					</div>
					<div class="quote-selector">
						<input type="radio" name="site-type" value="laravel" id="webquote_laravel" onclick="show('laravel');" /> Laravel
					</div>
					<div id="quote-laravel-area" class="web-area-information-box" hidden>
						<div class="information-text">
							<i class="fa fa-question-circle"></i>
							Laravel is a ultra flexible module based PHP CMS (Content Management System).
							It allows for more powerful web-based software solutions with custom user accounts,
							backend CMS, and accounting systems, or anything else that can be designed or imagined.
						</div>
						<div class="information-text">
							<i class="fa fa-check-circle"></i>
							We have skilled PHP programmers familiar with Laravel to make your more complex web
							solutions a reality.
						</div>
					</div>
					<div class="quote-selector">
						<input type="radio" name="site-type" value="other" id="webquote_other" onclick="show('other');" /> Other CMS
					</div>
					<div id="quote-other-area" class="web-area-information-box" hidden>
						<div class="information-text">
							<i class="fa fa-check-circle"></i>
							Want your site in another CMS not listed here? Perfect. We have worked
							with a variety of system in the past, and would love to expand our
							portfolio.
						</div>
					</div>
					<div class="quote-selector">
						<input type="radio" name="site-type" value="custom" id="webquote_custom" onclick="show('custom');" /> Custom PHP/HTML/CSS/etc.
					</div>
					<div id="quote-custom-area" class="web-area-information-box" hidden>
						<div class="information-text">
							<i class="fa fa-check-circle"></i>
							Want us to design something entirely your own? Perfect. We'd love to worked
							with you to make whatever you need work exactly as you want it, be it a game's
							server or a massive storage array for images.
						</div>
					</div>
					<div class="quote-selector">
						<input type="radio" name="site-type" value="not-sure" id="webquote_notsure" onclick="show('notsure');" /> I'm Not Sure
					</div>
					<div id="quote-notsure-area" class="web-area-information-box" hidden>
						<div class="information-text">
							<i class="fa fa-check-circle"></i>
							Not sure which of these suites your needs? That's fine, after all,
							it is our job to make the site for you, right? We can advise you on
							which of these is the best option, or just choose the option we think
							is best, so you have as little as possible to worry about.
						</div>
					</div>
					
					<button class="large-button" id="submit-type-button" onclick="selectSiteType();">Continue</button>
				</div>
				
				<div id="quote-web-area-final_wordpress" hidden>
					<h1 id="quote-web-area-final-header">I Want a Website Made With Wordpress</h1>
					<div class="information-small">
						WordPress? Awesome! We just need a little more information from you
						to try and make a quote for you. If you don't specify an option, we
						can always discuss or suggest one for you.
					</div>
					<h2>I want it with...</h2>
					<div class="quote-selector-small">
						<input type="checkbox" />This Theme:
						<input type="text" placeholder="theme name" disabled />
					</div>
					<div class="quote-selector-small">
						<input type="checkbox" />These Plugins:
						<input type="text" placeholder="list of some plugins" disabled />
					</div>
					
					<button class="large-button" id="submit-type-button" onclick="">Get Quote</button>
				</div>
			</div>
			
			<!-- PERSONAL CONTACTS -->
			
			<h3>The People</h3>
			<div class="buisness-card">
				<img src="img/ivan.png" class="buisness-card-image" />
				<div class="buisness-card-title">
					Ivan Mattie
				</div>
				<div class="buisness-card-subtitle">
					Founder
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						ivan.mattie@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (406) 281-2279<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (406) 281-2279
				</div>
			</div>
			
			<div class="buisness-card">
				<img src="https://scontent-b-sea.xx.fbcdn.net/hphotos-xpf1/t1.0-9/1280485_10201995087748762_276940508_n.jpg" class="buisness-card-image" />
				<div class="buisness-card-title">
					Andrew Eagle
				</div>
				<div class="buisness-card-subtitle">
					Founder
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						andrew.eagle@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (222) 333-4444<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
				</div>
			</div>
			
			<div class="buisness-card">
				<img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10485661_4401615775301_5797044954965852666_n.jpg?oh=785698ea9bc69a9f873b02d4a9f8ee87&oe=544B6A02&__gda__=1413171203_a1054191b9e6ff82dd6771992a594760" class="buisness-card-image" />
				<div class="buisness-card-title">
					Garret Meier
				</div>
				<div class="buisness-card-subtitle">
					Founder
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						garret.meier@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (222) 333-4444<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
				</div>
			</div>
			
			<div class="buisness-card">
				<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfa1/t1.0-9/485427_609250405754094_787240577_n.jpg" class="buisness-card-image" />
				<div class="buisness-card-title">
					David Lindenbaum
				</div>
				<div class="buisness-card-subtitle">
					Founder
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						david.lindenbaum@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (222) 333-4444<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
				</div>
			</div>
			
			<div class="buisness-card">
				<img src="img/luke.jpg" class="buisness-card-image" />
				<div class="buisness-card-title">
					Luke Geiken
				</div>
				<div class="buisness-card-subtitle">
					Software Engineer
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						luke.geiken@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (222) 333-4444<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
				</div>
			</div>
			
			<div class="buisness-card">
				<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xfa1/t1.0-9/10373656_1389505191338777_1885697209582270003_n.jpg" class="buisness-card-image" />
				<div class="buisness-card-title">
					Taylor Brown
				</div>
				<div class="buisness-card-subtitle">
					Artist
				</div>
				<br />
				<div class="buisness-card-email">
					<a href="#">
						luke.geiken@squareinfinity.com
					</a>
				</div>
				<div class="buisness-card-small-line">&nbsp;</div>
				<div class="buisness-card-bottom">
					<i class="fa fa-building-o"></i>&nbsp;office: +1 (222) 333-4444<br />
					<i class="fa fa-mobile-phone"></i>&nbsp;cell: +1 (999) 888-7777
				</div>
			</div>
		</div>
	</body>
</html>