<!DOCTYPE html>

<html>

<head>
	<title>Square Infinity Games</title>
	
</head>
<body>
	<?php
		
		$title = $_POST["title"];
		$content = $_POST['content'];
		$date = $_POST["date"];
		$url = $_POST["url"];
		
		if($title == null || $content == null || $date == null || $url == null) {
			header('Location: /~lucasgeiken/squareinfinity/SquareinfinityWeb/crazy_news_login.php');
			exit;
		}
		$hostname = "mysql.squareinfinity.com";   // eg. mysql.yourdomain.com (unique)
		$username = "aeolingamenfel";   // the username specified when setting-up the database
		$password = "@b1237ilol";   // the password specified when setting-up the database
		$database = "si_website";   // the database name chosen when setting-up the database (unique)
		
		$link = mysql_connect($hostname,$username,$password);
		mysql_select_db($database) or die("Unable to select database");
		
		if(!$link) {
			 throw new Exception("unable to connect");
		} else {
			mysql_query("INSERT INTO news (title, content, date, url) VALUES ('$title', '$content','$date','$url')", $link);		
			?>
				<h1>It has been added...</h1>
				<form name="input" action="create_awesome_news_story.php" method="post" id="news_form">
					Title: <input type="text" name="title"><br>
					Content (For new paragraph type &lt;br&gt;&lt;br&gt;) : <br><textarea name="content" rows="10" cols="100" form="news_form"></textarea><br>
					Todays Date (Format: July 8, 2014): <input type="text" name="date"><br>
					Photo name and extension (upload it yourself man) <input type="text" name="url"><br>
					!!!NOTE: Uploaded photos go in /games/news_images or else it won't be found!!!
					<br><input type="submit" value="Submit">
				</form>
			<?php
		}
		
		
		
	?>
</body>	
</html>