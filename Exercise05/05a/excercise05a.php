<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Exercise 05a</title>
        
    </head>
    <body>
        
		<?php
			echo "<br />", "The current month is: June";
			echo "<br />", "The current Year is: 2021";
			$number_of_days = cal_days_in_month(CAL_GREGORIAN, 6, 2021);
			($number_of_days == 29) ? 
				$month_type = "This current month is a leap month." :
				$month_type = "This current month is a normal month and not a leap month.";
			echo "<br />", $month_type;
		?>

    </body>
</html>
