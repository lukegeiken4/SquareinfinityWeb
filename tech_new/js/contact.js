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
	var wordpress = document.getElementById("webquote_wordpress");
	var laravel = document.getElementById("webquote_laravel");
	var other = document.getElementById("webquote_other");
	var custom = document.getElementById("webquote_custom");
	var notSure = document.getElementById("webquote_notsure");

	var header = $("#quote-web-area-final-header");
	
	$("#quote-web-area").hide(animSpeed);
	
	if(wordpress.checked){
		$("#quote-web-area-final_wordpress").show(animSpeed);
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