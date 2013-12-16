<?php
		$filename = 'counter.txt';

		//opens hits.txt to read 
		$open = fopen($filename,"r+");
		//get the count from the file, last parameter takes the file length, big number
		$count = fread($open,filesize($filename));
		//convert to number
		$count = intval($count);
		//closes the hits.txt file
		fclose($open);

		//adds one to the counter
		$count ++;
		

		// opens hits.txt to change new hit number, by writing in it
		$open = fopen($filename,"w+");

		//Writes to the counter
		fwrite($open, $count);

		//Closes the file
		fclose($open);

		//Finding out when the file was open the last time using filemtime
		
		date_timezone_set('America/New_York');

		$modified = filemtime($filename);
		$tenMinAgo = strtotime('10 minutes ago');
		$diff = abs($tenMinAgo - $modified);

		echo "$modified " . date ("F d Y H : i : s.", $modified) . "<br>\n";
		echo "$tenMinAgo " . date ("F d Y H : i : s.", $tenMinAgo) . "<br>\n";
		echo "$diff<br>\n";

		if(file_exists($filename)) {
			//prints when the file was open the last time. 
			echo "$filename was last modified: " . date ("F d Y H : i : s.", $modified);
		}

		//10 min ago from the unix time counter, (not 10 min ago from the file was open)
		echo "<br>10 min ago was: " . date ("F d Y H : i : s.", $tenMinAgo);

		//calculate if time has been more than 10 min since last upload then reset. 
		if($diff > (10 * 60)) {
			echo "Then reset the counter .txt";
			$count = 0;
		} else {
			echo "Let's keep going";
		}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UX Hit Counter</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<h1>See the site change</h1>

				<?php 
				if ($count < "4")
					{
						echo '<div class="box" id="one"></div>' . '<div class="box" id="two"></div>' . 
						'<div class="box" id="three"></div>' . '<div class="box" id="four"></div>';
					}
				else if ($count < "8")
					{
						echo '<div class="box" id="one"></div>' . '<div class="box" id="two"></div>' . 
						'<div class="box" id="three"></div>' . '<div class="box" id="fire"></div>';

						echo '<div class="box2" id="five"></div>' . '<div class="box2" id="six"></div>' . 
						'<div class="box2" id="seven"></div>' . '<div class="box2" id="eight"></div>';
					}
				else 
					{
						echo '<div class="box" id="one"></div>' . '<div class="box" id="two"></div>' . 
						'<div class="box" id="three"></div>' . '<div class="box" id="fire"></div>';
						
						echo '<div class="box2" id="three"></div>' . '<div class="box2" id="four"></div>' . 
						'<div class="box2" id="five"></div>' . '<div class="box2" id="six"></div>';

						echo '<div class="box3" id="nine"></div>' . '<div class="box3" id="ten"></div>' . 
						'<div class="box3" id="eleven"></div>' . '<div class="box3" id="twelve"></div>';
					}
				?> 
		
	</body>
</html>
