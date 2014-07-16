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
				
				<div id="quote-web-area-final_notsure" hidden>
					
				</div>
				
				<div id="quote-web-area-final_wordpress" hidden>
					<h1 id="quote-web-area-final-header">I Want a Website Made With Wordpress</h1>
					<div class="information-small">
						<a href="http://wordpress.org/">WordPress</a>? Awesome! We just need a little more information from you
						to try and make a quote for you. If you don't specify an option, we
						can always discuss or suggest one for you.
					</div>
					<h2>I want it with...</h2>
					<div class="quote-selector-small">
						<input type="checkbox" />This Theme:
						<input type="text" placeholder="theme name" />
					</div>
					<div class="quote-selector-small">
						<input type="checkbox" />These Plugins:
						<input type="text" placeholder="list of some plugins" />
					</div>
					<div class="quote-selector-small">
						<input type="checkbox" id="wordpress_ecommerce-check"/> eCommerce
					</div>
					<hr width="40%"/>
					<div class="quote-selector-small">
						<input type="checkbox" id="wordpress_content-setup-check" /> I Want Square Infinity to Setup My Content
						<div class="information-small tab">
							Checking this means you don't want to put the beginning content
							of your site into the site itself, and you want Square Infinity
							to do it for you, keeping in mind you must provide said content.
							This is free, unless you have a large amount of content that 
							would take a lot of our time to do.
						</div>
					</div>
					<div class="quote-selector-small">
						<input type="checkbox" /> I Need Help With WordPress
						<div class="information-small tab">
							Checking this means you are not familar with
							WordPress, or just want some more training
							on how to use it, which we will provide free
							of charge.
						</div>
					</div>
					<hr width="40%"/>
					<div class="quote-selector-small">
						<input type="checkbox" id="wordpress_domain-needed" /> I Need a Domain or Domains
						<div class="information-small tab">
							Checking this means you do not own
							the domain you want your site hosted
							on, and you want Square Infinity to 
							purchase the domain in your name. Keep
							in mind some domains are already registered
							and may be much more expensive or unavailable.
						</div>
					</div>
					<div class="quote-selector-small">
						<input type="checkbox" id="wordpress_si-host" /> I Want Square Infinity to Host My Site
						<div class="information-small tab">
							Checking this means you do not have a server
							or hosting provider to host your site on, 
							and want to host with Square Infinity. We
							offer tiered hosting options to our client 
							that start at $3/mo.
						</div>
						<div class="information-small tab">
							You will not be billed for hosting until
							completion of site design.
						</div>
					</div>
					<hr width="40%"/>
					<div class="quote-selector-small">
						<input type="checkbox" checked disabled/> WordPress Essentials
						<div class="information-small">
							WordPress and Square Infinity provide some features free of charge with
							every WordPress design we make, which includes:<br />
							<div class="information-bullet"><i class="fa fa-check"></i>Search Engine Optimization</div>
							<div class="tab">
								what's a site if it doesn't show up
								on a search engine correctly? That's why we make sure to use the
								necessary meta tags, robots.txt, and social media linking to make sure
								your users find you.
							</div>
							<div class="information-bullet"><i class="fa fa-check"></i>Social Media Integration</div>
							<div class="tab">
								In today's interconnected, social media centered digital world, it's important
								to keep brand standards in tact, and have cross pollination between your social
								networks and your website, and we will help you to add Twitter feeds, Facebook
								like buttons, or anything you could need.
							</div>
						</div>
					</div>
					<h2>Some Final Information</h2>
					<div class="information-small">
						We just need a little more information from you to really get an accurate quote.
						Please describe your site design in more detail below.
					</div>
					<div class="information-medium">
						What is this site design for?
					</div>
					<div class="quote-selector-small">
						<textarea class="final-information" placeholder="My site design is for my company XYZ Co. and..."></textarea>
					</div>
					<div class="information-medium">
						Is there anything specific you need or want this site to do?
					</div>
					<div class="quote-selector-small">
						<textarea class="final-information" placeholder="Well I do need it to have..."></textarea>
					</div>
					<h2>Estimated Pricing</h2>
					<div class="information-small">
						Below is an estimate of how much this design would cost you.
						It is just an estimate based on how much we have charged in
						the past for similar designs, and may not be reflective
						of what we would actually charge. This price is, of course,
						totally negotiable, and we can work out custom solutions
						if necessary to accommodate your needs.
					</div>
					<div>
						<div class="price-entry-name">
							WordPress Setup
						</div>
						<div class="price-entry">
							$25-100
						</div>
						<br />
						<div class="price-entry-name">
							Theme Construction/Modification
						</div>
						<div class="price-entry">
							$200-800
						</div>
						<br />
						<div id="wordpress_price-area">
							<!-- this will be autofilled -->
						</div>
						<div class="price-entry-name">
							WordPress Essentials
						</div>
						<div class="price-entry">
							Free!
						</div>
						<hr width="50%" />
						<div id="wordpress_price-area-final" class="final-price">
							<!-- this will also be autofilled -->
						</div>
					</div>
					
					<button class="large-button" id="submit-type-button" onclick="updateWordpressPricing();">Refresh Price</button>
					
					<h2>Delivery Time</h2>
					<div class="information-medium">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						For most WordPress sites, we can have your site fully
						functional and on any domain you own in 1-2 weeks.
						Naturally, the more content you have, or the more custom
						you want the site to be, the longer it may take.
					</div>
					<div class="information-medium">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						If you have a rush job or generally need the
						site done quick, we can accommodate, but if
						we have a lot of other sites we are designing
						at the time, you may be charged extra.
					</div>
					<h2>Want a More Accurate Quote?</h2>
					<div class="information-medium">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						This system is entirely just to give you an
						idea of generally what we charge. If you
						want a more accurate quote, just click the
						button below and we will personally look at your request
						and give you a quote.
					</div>
					<button class="large-button" id="submit-type-button" onclick="showPersonalInformation('quote-web-area-final_wordpress');">
						Get Quote
					</button>
				</div>
				
				<div id="quote-personal-information" hidden>
					<h1>Your Information</h1>
					<div class="information-medium">
						Before we look over your quote request,
						we need some information about you, so 
						we can contact you when we get you a quote.
					</div>
					<div class="information-small">
						Fields marked with a (*) are required.
					</div>
					<h2>Personal Information</h2>
					<div class="information-small">
						Below is the information of the person
						we will contact when we finish the quote,
						or if we have any questions about your
						quote.
					</div>
					<div class="quote-selector-small">
						Name*: <input type="text" />
					</div>
					<div class="quote-selector-small">
						Phone: <input type="text" />
					</div>
					<div class="quote-selector-small">
						Email*: <input type="text" />
					</div>
					<div class="quote-selector-small">
						Contact Hours: <input type="text" />
						<div class="information-small tab">
							If you fill this in, we will only
							contact you via telephone or email
							within the time restriction listed.
						</div>
						<div class="information-small tab">
							In most cases, we will never contact
							you outside of normal business hours.
						</div>
					</div>
					<h2>Association Information</h2>
					<div class="quote-selector-small">
						Company/Assoc Name: <input type="text" />
					</div>
					<div class="quote-selector-small">
						Website/Domain: <input type="text" />
					</div>
					
					<button class="large-button">
						Get Quote
					</button>
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