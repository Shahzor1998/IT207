<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Exercise 05b</title>
        
    </head>
    <body>
        
		<?php
			echo "<b>Printing LunchChoices with a 'foreach' code structure: </b><br />";
			$LunchChoices = array("Salad", "Sushi", "Thai", "Mexican", "Indian");
			foreach($LunchChoices as $FoodType) {
				echo $FoodType, "<br />";
			}
			
			echo "<b>Printing LunchChoices with a 'while' code structure: </b><br />";
			$ArrayCount = count($LunchChoices)-1;
			$Count1 = 0;
			while ($Count1 <= $ArrayCount){
				echo $LunchChoices[$Count1], "<br />";
				++$Count1;
			}
			
			echo "<b>Printing LunchChoices with a 'do-while' code structure: </b><br />";			
			$Count2 = 0;
			$ArrayCount = count($LunchChoices)-1;
			do {
				echo $LunchChoices[$Count2], "<br />";
				++$Count2;
			} while ($Count2<=$ArrayCount);
				
			echo "<b>Printing MonthsOfYear with a 'for' code structure: </b><br />";
			$MonthsOfYear = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
			$ArrayCount = count($MonthsOfYear)-1;
			for ($Count3=0; $Count3<=$ArrayCount; $Count3++){
				echo $MonthsOfYear[$Count3], "<br />";
			}
		?>

    </body>
</html>
