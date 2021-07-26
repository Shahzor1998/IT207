<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Exercise 05b</title>
        
    </head>
    <body>
        
		<?php
			$current_minute = date("i");
			$current_second = date("s");
			$current_time = date("h:i:s");
			
			
			echo "The Current time is: ", $current_time;
			if (($current_minute and $current_second) >= 0 and $current_minute<=14 and $current_second<=59){
				echo "We are currently in the first Quarter of the hour.";
			}
			else if ($current_minute >=15 and $current_minute<=29){
				echo "<br /> We are currently in the Second Quarter of the hour.";
			}
			else if ($current_minute >=30 and $current_minute<=44){
				echo "<br /> We are curently in the Third Quarter of the hour.";
			}
			else {
				echo "<br /> We are currently in the Fourth Quarter of the hour.";
			}
		?>

    </body>
</html>
