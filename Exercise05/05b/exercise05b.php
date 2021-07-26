<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Exercise 05b</title>
        
    </head>
    <body>
        
		<?php
			function modulus_outputter1($value1=10, $value2=2) {
				$output = $value1 % $value2;
				echo "The funtion 1 modulus is: ", $output;
			}
			function modulus_outputter2($value1, $value2) {
				$output = $value1 % $value2;
				return $output;
			}
			modulus_outputter1(26, 5);
			echo "<br />", "The function 2 modulus is: ", modulus_outputter2(33, 9);
		?>

    </body>
</html>
