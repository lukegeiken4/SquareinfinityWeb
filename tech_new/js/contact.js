var animSpeed = 500;

// auto chooses the right div to display
// from original description
selectQuoteType = function(){
	var contractTypeApp = document.getElementById("contract-type-app");
	var contractTypeWeb = document.getElementById("contract-type-website");
	
	$("#quote-main-form").hide(animSpeed);
	
	if(contractTypeApp.checked){
		$("#quote-app-area").show(animSpeed);
	}else if(contractTypeWeb.checked){
		$("#quote-web-area").show(animSpeed);
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

showPersonalInformation = function(caller){
	$("#" + caller).hide(animSpeed);
	
	$("#quote-personal-information").show(animSpeed);
}

updateWordpressPricing = function(){
	var priceArea = document.getElementById("wordpress_price-area");
	var finalPriceArea = document.getElementById("wordpress_price-area-final");
	
	var ecommerce = document.getElementById("wordpress_ecommerce-check");
	var contentSetup = document.getElementById("wordpress_content-setup-check");
	var domainNeeded = document.getElementById("wordpress_domain-needed");
	var siHost = document.getElementById("wordpress_si-host");
	
	priceArea.innerHTML = "";
	
	var finalLowPrice = 225;
	var finalHighPrice = 900;
	
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
	}if(siHost.checked){
		addPrice(priceArea, "Hosting (Alpha Tier)", "$3/mo");
	}
	
	finalPriceArea.innerHTML = "Total: $" + finalLowPrice + "-" + finalHighPrice;
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