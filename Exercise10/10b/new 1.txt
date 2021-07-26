<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Array Exercise 10a</title>
	</head>
	<body>
		<?php
			$great_lakes = array("Superior", "Huron", "Michigan", "Erie", "Ontario");
			
			array_splice($great_lakes, -2, 0, array("Lake Tahoe", "lliamna Lake", "Great Salt Lake", "Lake Oahe"));
			echo "<b>Adding Tahoe and lliamna with two other lakes to middle of the array:</b> <br />";
			print_r ($great_lakes);
			echo "<br /><br />";
			
			array_splice($great_lakes, -2, 2);
			echo "<b>Removing Erie and Ontario from the array:</b> <br />";
			print_r ($great_lakes);
			echo "<br /><br />";
			
			$great_lakes_4 = array_slice($great_lakes, 2, 4);
			echo "<b>Returning my favorite Lakes from the array:</b> <br />";
			print_r ($great_lakes_4);
			echo "<br /><br />";
			
		?>
	</body>
</html>