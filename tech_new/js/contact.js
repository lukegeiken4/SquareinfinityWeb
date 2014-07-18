var CONTRACT = 0;
var WEB_CONTRACT = 1;
var APP_CONTRACT = 2;

var animSpeed = 500;
var contractType = -1;

var wordpress = false;

// auto chooses the right div to display
// from original description
selectQuoteType = function(){
	var contractTypeApp = document.getElementById("contract-type-app");
	var contractTypeWeb = document.getElementById("contract-type-website");
	var contractTypeHosting = document.getElementById("contract-type-hosting");
	
	if(contractTypeApp.checked || contractTypeWeb.checked || contractTypeHosting.checked){
		$("#quote-main-form").hide(animSpeed);
		
		if(contractTypeApp.checked){
			contractType = APP_CONTRACT;
			$("#quote-app-area").show(animSpeed);
		}else if(contractTypeWeb.checked){
			contractType = WEB_CONTRACT;
			swapToWebForm();
			updateWordpressPricing();
		}else if(contractTypeHosting.checked){
			$("#quote-web-hosting-area").show(animSpeed);
		}
	}
}

getQuote = function(){
	var finalOutput = "New Quote Request:\n\n";
	
	if(isReadyForQuote()){
		finalOutput += "Name: " + $("#name-text").val() + "\n";
		finalOutput += "Phone: " + $("#phone-text").val() + "\n";
		finalOutput += "Email: " + $("#email-text").val() + "\n";
		finalOutput += "Contact Hours: " + $("#contact-hours-text").val() + "\n";
		
		finalOutput += "Company: " + $("#company-name-text").val() + "\n";
		finalOutput += "Company Website: " + $("#company-website-text").val() + "\n\n";
		
		if(contractType == WEB_CONTRACT){
			if($("#web_upgrade").prop("checked")){
				finalOutput += $("#name-text").val() + " wanted a website, which is an upgrade on a site they already have.\n\n";
			}else{
				finalOutput += $("#name-text").val() + " wanted a website.\n\n";
			}
			finalOutput += "They wanted it to have " + indexCheckboxes('web') + ".\n\n";
			finalOutput += "They described it as:\n" + $("#web_design").val() + "\n\n";
			finalOutput += "And specified the following functionality:\n" + $("#web_functionality").val() + "\n";
			
		}else if(contractType == APP_CONTRACT){
			finalOutput += $("#name-text").val() + " wanted an app on " + indexAppPlatforms() + ".\n";
			finalOutput += "This app was to be a ";
			if($("#app-type-game").prop("checked")){
				finalOutput += "game of type " + $("#game-category").val();
			}else if($("#app-type-util").prop("checked")){
				finalOutput += "utility of type " + $("#util-category").val();
			}
			finalOutput += ".\n\n";
			
			finalOutput += "They wanted it to have " + indexCheckboxes('app') + ".\n";
			
			if($("#app-type-game").prop("checked")){
				finalOutput += "They described it as follows:\n" + $("#game_description").val() + "\n";
			}else{
				finalOutput += "They described it as follows:\n" + $("#util_description").val() + "\n";
			}
		}else{
			finalOutput += "An Error Occurred.";
		}
		
		var quoteButton = $("#final-get-quote-button");
		quoteButton.html("Sending...");
		quoteButton.attr("onclick", "");
		
		$.ajax({
			type: "GET",
			url: "send-email.php",
			data: {email: $("#email-text").val(), message: finalOutput}
		}).done(function(msg){
			var quoteButton = $("#final-get-quote-button");
		
			if(msg == 'success'){
				quoteButton.html("Sent!");
				$("#after-quote-text").html("Thanks! We'll get back to you shortly!");
			}else{
				quoteButton.html("Send Failure");
				$("#after-quote-text").html("The monkeys have been dispatched! Your problem will be solved shortly, so please try again soon. We apologies for the inconvenience.");
			}
			
			$("#after-quote-text").show(250);
		});
		
		//alert(finalOutput);
	}
}

indexAppPlatforms = function(){
	var checkedEntries = new Array();
	
	if($("#ios-checkbox").prop("checked")){
		checkedEntries[checkedEntries.length] = "iOS";
	}if($("#android-checkbox").prop("checked")){
		checkedEntries[checkedEntries.length] = "Android";
	}if($("#blackberry-checkbox").prop("checked")){
		checkedEntries[checkedEntries.length] = "BlackBerry";
	}if($("#windows-store-checkbox").prop("checked")){
		checkedEntries[checkedEntries.length] = "Windows Store";
	}
	
	var finalOutput = "";
	
	for(var x=0; x<checkedEntries.length - 1; x++){
		finalOutput += checkedEntries[x] + ", ";
	}
	
	if(finalOutput.length > 1){
		finalOutput += "and " + checkedEntries[checkedEntries.length - 1];
	}else{
		finalOutput += checkedEntries[checkedEntries.length - 1];
	}
	
	return finalOutput;
}

indexCheckboxes = function(type){
	var checkedEntries = new Array();
	
	if(type == 'web'){ // ------------- WEB ------- //
		if($("#wordpress_toggle").prop("checked")){ // wordpress
			append("#wordpress_toggle", checkedEntries, "WordPress");
			append("#wp_theme", checkedEntries, "the theme '" + $("#wp_theme-text").val() + "'");
			append("#wp_plugins", checkedEntries, "the plugin(s) '" + $("#wp_plugins-text").val() + "'");
			append("#wp_help-with-wordpress", checkedEntries, "Square Infinity to help them with WordPress");
		}else{ // normal site
			append("#web_ecommerce", checkedEntries, "eCommerce");
			append("#wordpress_checkbox0", checkedEntries, "user accounts & logins");
			append("#wordpress_checkbox1", checkedEntries, "a CMS");
			append("#wordpress_checkbox2", checkedEntries, "media storage/retrieval");
			append("#wordpress_checkbox3", checkedEntries, "social media integration");
			append("#wordpress_checkbox4", checkedEntries, "a search system");
		}
		
		append("#live-content-integration", checkedEntries, "live content integration");
		append("#mail-server-integration", checkedEntries, "a mail server");
		append("#google-maps-integration", checkedEntries, "Google Maps integration");
		append("#wordpress_content-setup-check", checkedEntries, "Square Infinity to setup their content");
		append("#wordpress_domain-needed", checkedEntries, "a domain or domain(s)");
		append("#wordpress_si-host", checkedEntries, "Square Infinity to host their site");
	}else if(type == 'app'){ // ------- APP ------- //
		if($("#app-type-game").is(":checked")){ // game
			append("#game_social-media-integ", checkedEntries, "social media integration");
			append("#game_service-integration", checkedEntries, "games service(s)");
			append("#game_3d", checkedEntries, "3D gameplay");
		}else{ // utility
			append("#util_social-media", checkedEntries, "social media integration");
			append("#util_camera", checkedEntries, "camera access");
			append("#util_image-editing", checkedEntries, "image editing");
			append("#util_server-interface", checkedEntries, "server interfacing");
			append("#util_push-notifications", checkedEntries, "push notifications");
			append("#util_hardware-access", checkedEntries, "hardware access");
		}
	}else{
		return "nothing";
	}
	
	var finalOutput = "";
	
	for(var x=0; x<checkedEntries.length - 1; x++){
		finalOutput += checkedEntries[x] + ", ";
	}
	
	if(finalOutput.length > 1){
		finalOutput += "and " + checkedEntries[checkedEntries.length - 1];
	}else{
		finalOutput += checkedEntries[checkedEntries.length - 1];
	}
	
	return finalOutput;
}

append = function(area, array, value){
	if($(area).prop("checked")){
		array[array.length] = value;
	}
}

isReadyForQuote = function(){
	if(!$("#name-text").val().trim() == ""){
		if(!$("#email-text").val().trim() == ""){
			return true;
		}else{
			alert("please enter an email");
			return false;
		}
	}else{
		alert("please enter a name");
		return false;
	}
}

toggleWordpress = function(){
	wordpress = !wordpress;
	
	if(wordpress){
		$("#wordpress-options").show(animSpeed);
		$("#wordpress-options2").show(animSpeed);
		$("#wordpress-options3").show(animSpeed);
		
		$("#wordpress_checkbox0").prop('checked', true);
		$("#wordpress_checkbox1").prop('checked', true);
		$("#wordpress_checkbox2").prop('checked', true);
		$("#wordpress_checkbox3").prop('checked', true);
		$("#wordpress_checkbox4").prop('checked', true);
		$("#wordpress_checkbox0").prop('disabled', true);
		$("#wordpress_checkbox1").prop('disabled', true);
		$("#wordpress_checkbox2").prop('disabled', true);
		$("#wordpress_checkbox3").prop('disabled', true);
		$("#wordpress_checkbox4").prop('disabled', true);
	}else{
		$("#wordpress-options").hide(animSpeed);
		$("#wordpress-options2").hide(animSpeed);
		$("#wordpress-options3").hide(animSpeed);
		
		$("#wordpress_checkbox0").prop('checked', false);
		$("#wordpress_checkbox1").prop('checked', false);
		$("#wordpress_checkbox2").prop('checked', false);
		$("#wordpress_checkbox3").prop('checked', false);
		$("#wordpress_checkbox4").prop('checked', false);
		$("#wordpress_checkbox0").prop('disabled', false);
		$("#wordpress_checkbox1").prop('disabled', false);
		$("#wordpress_checkbox2").prop('disabled', false);
		$("#wordpress_checkbox3").prop('disabled', false);
		$("#wordpress_checkbox4").prop('disabled', false);
	}
}

// switches site type to final question area
selectSiteType = function(){
	console.log("switching site type");
	var wordpress = document.getElementById("webquote_wordpress");
	var laravel = document.getElementById("webquote_laravel");
	var other = document.getElementById("webquote_other");
	var custom = document.getElementById("webquote_custom");
	var notSure = document.getElementById("webquote_notsure");
	
	$("#quote-web-area").hide(animSpeed);
	
	if(wordpress.checked){
		console.log("switching to wordpress");
		$("#quote-web-area-final_wordpress").show(animSpeed);
	}else if(notSure.checked){
		console.log("switching to notsure");
		$("#quote-web-area-final_notsure").show(animSpeed);
	}
}

swapToWebForm = function(){
	$("#quote-web-area").hide(animSpeed);
	$("#quote-web-area-final_wordpress").show(animSpeed);
}

showPersonalInformation = function(caller){
	$("#" + caller).hide(animSpeed);
	
	$("#quote-personal-information").show(animSpeed);
}

updateWordpressPricing = function(){
	var wordpressToggle = document.getElementById("wordpress_toggle");

	var priceArea = document.getElementById("wordpress_price-area");
	var priceArea2 = document.getElementById("price-area-final");
	var finalPriceArea = document.getElementById("wordpress_price-area-final");
	
	var ecommerce = document.getElementById("wordpress_ecommerce-check");
	var contentSetup = document.getElementById("wordpress_content-setup-check");
	var domainNeeded = document.getElementById("wordpress_domain-needed");
	var siHost = document.getElementById("wordpress_si-host");
	var googleMapsIntegration = document.getElementById("google-maps-integration");
	var mailServerIntegration = document.getElementById("mail-server-integration");
	var liveContentIntegration = document.getElementById("live-content-integration");
	var searchIntegration = document.getElementById("wordpress_checkbox4");
	var socialMediaIntegration = document.getElementById("wordpress_checkbox3");
	var mediaStorageIntegration = document.getElementById("wordpress_checkbox2");
	var cmsIntegration = document.getElementById("wordpress_checkbox1");
	var userIntegration = document.getElementById("wordpress_checkbox0");
	
	priceArea.innerHTML = "";
	priceArea2.innerHTML = "";
	
	var finalLowPrice = 0;
	var finalHighPrice = 0;
	
	if(wordpressToggle.checked){
		var finalLowPrice = 225;
		var finalHighPrice = 900;
		
		addPrice(priceArea2, "WordPress Setup", "$25-100");
		addPrice(priceArea2, "Theme Construction/Modification", "$200-800");
		addPrice(priceArea2, "WordPress Essentials", "Free!");
	}else{
		var finalLowPrice = 200;
		var finalHighPrice = 400;
		
		addPrice(priceArea2, "Site Setup", "$100-200");
		addPrice(priceArea2, "Site Design", "$100-200");
		
		if(searchIntegration.checked){
			addPrice(priceArea, "Search", "By Request");
		}if(socialMediaIntegration.checked){
			finalHighPrice += 100;
			
			addPrice(priceArea, "Social Media", "$0-100");
		}if(mediaStorageIntegration.checked){
			finalLowPrice += 800;
			finalHighPrice += 1000;
			
			addPrice(priceArea, "Media Storage", "$800-1000, &cent;10/GiB");
		}if(cmsIntegration.checked){
			finalLowPrice += 700;
			finalHighPrice += 700;
			
			addPrice(priceArea, "CMS", "By Request (>700)");
		}if(userIntegration.checked){
			finalLowPrice += 500;
			finalHighPrice += 700;
			
			addPrice(priceArea, "Users", "$500-700");
		}
	}
	
	if(ecommerce.checked){
		finalLowPrice += 400;
		finalHighPrice += 1000;
		
		addPrice(priceArea, "eCommerce", "$400-1000");
	}if(contentSetup.checked){
		finalHighPrice += 500;
		
		addPrice(priceArea, "Content Setup", "$0-500");
	}if(domainNeeded.checked){
		finalLowPrice += 10;
		finalHighPrice += 50;
		
		addPrice(priceArea, "Domain Registration", "$10-50");
	}if(googleMapsIntegration.checked){
		finalLowPrice += 500;
		finalHighPrice += 700;
		
		addPrice(priceArea, "Google Maps", "$500-700");
	}if(mailServerIntegration.checked){
		finalLowPrice += 200;
		finalHighPrice += 400;
		
		addPrice(priceArea, "Mail Server", "$200-400");
	}if(liveContentIntegration.checked){
		finalLowPrice += 400;
		finalHighPrice += 600;
		
		addPrice(priceArea, "Live Content", "$400-600");
	}if(siHost.checked){
		addPrice(priceArea, "Hosting (Alpha Tier)", "$3/mo");
	}
	
	var average = (finalLowPrice + finalHighPrice) / 2;
	
	finalPriceArea.innerHTML = "Total: $" + average;
}

addPrice = function(div, name, price){
	var priceNameDiv = document.createElement("div");
	priceNameDiv.setAttribute("class", "price-entry-name");
	priceNameDiv.innerHTML = name;
	
	var priceDiv = document.createElement("div");
	priceDiv.setAttribute("class", "price-entry");
	priceDiv.innerHTML = price;
	
	div.appendChild(priceNameDiv);
	div.appendChild(priceDiv);
	div.appendChild(document.createElement("br"));
}

switchAppType = function(type){
	$("#game-form").hide(animSpeed);
	$("#utility-form").hide(animSpeed);
	
	if(type == 'game'){
		$("#game-form").show(animSpeed);
	}else if(type == 'utility'){
		$("#utility-form").show(animSpeed);
	}
}

show = function(name){
	var wordpressArea = $("#quote-wordpress-area");
	var laravelArea = $("#quote-laravel-area");
	var otherArea = $("#quote-other-area");
	var customArea = $("#quote-custom-area");
	var notSureArea = $("#quote-notsure-area");
	
	wordpressArea.hide(animSpeed);
	laravelArea.hide(animSpeed);
	otherArea.hide(animSpeed);
	customArea.hide(animSpeed);
	notSureArea.hide(animSpeed);
	
	if(name == 'wordpress'){
		wordpressArea.show(animSpeed);
	}else if(name == 'laravel'){
		laravelArea.show(animSpeed);
	}else if(name == 'other'){
		otherArea.show(animSpeed);
	}else if(name == 'custom'){
		customArea.show(animSpeed);
	}else if(name == 'notsure'){
		notSureArea.show(animSpeed);
	}
}