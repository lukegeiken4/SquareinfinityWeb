<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example Layout</title>
</head>
<body style="width:100%; height:100%; background: white;">
    <div style="width: 60%; margin: 0 auto; background: white; margin-top:10%; padding: 40px;">
	<?php
		$id = (int) pg_escape_string($_GET['id']);
		if(is_int($id)) {
			if($id != null) {
				$hostname = "mysql.squareinfinity.com";   // eg. mysql.yourdomain.com (unique)
				$username = "aeolingamenfel";   // the username specified when setting-up the database
				$password = "@b1237ilol";   // the password specified when setting-up the database
				$database = "si_website";   // the database name chosen when setting-up the database (unique)
				
				$link = mysql_connect($hostname,$username,$password);
				mysql_select_db($database) or die("Unable to select database");
				
				if(!$link) {
					 throw new Exception("unable to connect");
				} else {
					$query = "SELECT * FROM news where id = " . $id;
					$result = mysql_query($query);
					if ( $row = mysql_fetch_assoc ($result)) {
						$firstRow = $row;
						mysql_data_seek($result, 0);
						while($row = mysql_fetch_assoc($result)) {
						    $title = $row['title'];
						    $content = $row['content'];
						    $date = $row['date'];
						    $url = $row['url'];
						    
						    ?>
						    <img style="float: left; width: 400px; height:400px;" src="news_images/<?php echo $url ?>" alt="">
							<h1 style="text-align: right"><?php echo $title; ?></h1>
							<h3 style="text-align: right"><?php echo $date; ?></h3>
							<h2 style="text-align: left; margin-top:350px;"><?php echo $content; ?></h2>
						    <?php
						}
					}
				}
			} else {
				echo "Content could not be loaded";
			}
		} 
	?>
    </div>
</body>
</html>