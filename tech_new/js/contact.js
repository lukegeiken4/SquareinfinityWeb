var animSpeed = 500;
var wordpress = false;

// auto chooses the right div to display
// from original description
selectQuoteType = function(){
	var contractTypeApp = document.getElementById("contract-type-app");
	var contractTypeWeb = document.getElementById("contract-type-website");
	
	$("#quote-main-form").hide(animSpeed);
	
	if(contractTypeApp.checked){
		$("#quote-app-area").show(animSpeed);
	}else if(contractTypeWeb.checked){
		//$("#quote-web-area").show(animSpeed);
		swapToWebForm();
		updateWordpressPricing();
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