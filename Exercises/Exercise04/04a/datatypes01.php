<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Example </title>
	</head>
	<body>
		
		<?php 
			$variable_one = 3.1423465161651;
			$variable_two = "3.1423465161651";
			settype($variable_one, "float");
			echo "the first variable is called variable_one, the value it contains: ", $variable_one;
			echo "<br />", "the first variable is called variable_two, the value it contains: ", $variable_two;
			echo "<br />", "The variable type for variable_one: ", gettype($variable_one);
			echo "<br />", "The variable type for variable_two: ", gettype($variable_two);
			
		?>
		
	</body>
</html>
