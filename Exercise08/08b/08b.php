<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lab 2</title>
    </head>
    <body>
		<?php
			$string_1 = "I have a 3.72 GPA";
			echo "First String (String equivalent): $string_1 <br /><br />";
			$gpa = 3.72;
			$string_2 = sprintf("I have a %d GPA", $gpa);
			echo "Second String (Integer equivalent): $string_2 <br /><br />";
			
			$output = strcmp($string_1, $string_2);
			if ($output>0){
				echo "the first string is larger and the second string is smaller.";
			}
			
		?>
    </body>
</html>
