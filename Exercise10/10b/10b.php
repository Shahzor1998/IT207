<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Array Exercise 10a</title>
	</head>
	<body>
		<?php
			$mother_side = array("Grandma" => "Natifunissa", 
								"M_Uncle1" => "Nafis",
								"M_Uncle2" => "Nadeem",
								"M_Uncle3" => "Ahmed",
								"M_Aunt1" => "Rabia",
								"M_Aunt2" => "Sofia",
								"M_Aunt3" => "Maria",
								"M_Cousin1" => "Aashir",
								"M_Cousin2" => "Ahmad",
								"M_Cousin3" => "Sameer",
								"M_Cousin4" => "Jabir",
								"M_Cousin5" => "Shary");
								
			echo "<b>Printing Mother Side array:</b><br />";
			echo print_r($mother_side);
			
			$father_side = array("Grandma" => "Bano", 
								"D_Uncle1" => "Sohail",
								"D_Uncle2" => "Laul",
								"D_Uncle3" => "Jahan",
								"D_Aunt1" => "Afshan",
								"D_Aunt2" => "Sameera",
								"D_Aunt3" => "Laila",
								"D_Cousin1" => "Anas",
								"D_Cousin2" => "Zarrar",
								"D_Cousin3" => "Mohammad",
								"D_Cousin4" => "Saad",
								"D_Cousin5" => "Zammam");
								
			echo "<br /><br /><b>Printing Father Side array:</b><br />";
			echo print_r($father_side);
			
			echo "<br /><br /><b>Printing Merged array:</b><br />";
			$relatives = array_merge($mother_side, $father_side);
			asort($relatives);
			echo print_r($relatives);
			
			echo "<br /><br /><b>Printing merged alphabatized names:</b><br />";
			foreach ($relatives as $elements){
				echo $elements, " ";
			}
			
		?>
	</body>
</html>