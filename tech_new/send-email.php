<?php
	if(isset($_GET["email"]) &&
		isset($_GET["message"])){
		$email = $_GET["email"];
		$message = $_GET["message"];
		
		$result = mail("contact@squareinfinity.com", "[web]New Quote Request", $message);
		$result2 = mail($email, "Quote Request Recipt", "You recently submitted a quote request to Square Infinity successfully, thank you.");
		
		if($result && result2){
			echo "success";
		}else{
			echo "error";
		}
	}else{
		echo "please specify email.";
	}
?>