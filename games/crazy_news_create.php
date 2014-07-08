<!DOCTYPE html>

<html>

<head>
	<title>Square Infinity Games</title>
	
</head>
<body>
	<?php
		
		$dbusername = $_POST["username"];
		$unhashed_password = $_POST['password'];
		
		if($dbusername == null || $unhashed_password == null) {
			header('Location: /~lucasgeiken/squareinfinity/SquareinfinityWeb/games/crazy_news_login.php');
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
			$query = "SELECT * FROM user";
			$result = mysql_query($query);
			
			if ( $row = mysql_fetch_assoc ($result)) {
			    $firstRow = $row;
			    mysql_data_seek($result, 0);
			
			    while($row = mysql_fetch_assoc($result)) {
				$hash = $row['password_second'];
				if($row['password'] == hash('sha256', $hash . $_POST['password']) && $row['username'] == $dbusername) {
					?>
						<form name="input" action="create_awesome_news_story.php" method="post"  id="news_form">
							Title: <input type="text" name="title"><br>
							Content: <br><textarea name="content" rows="10" cols="100" form="news_form"></textarea><br>
							Todays Date (Format: July 8, 2014): <input type="text" name="date"><br>
							Url for photo or video (upload it yourself man) <input type="text" name="url"><br>
							<input type="submit" value="Submit">
						</form>
					
					<?php
				}
			    }
			}
		}
		
		
		
	?>
</body>	
</html>