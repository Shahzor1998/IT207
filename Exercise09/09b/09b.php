<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Exercise 09b</title>
    </head>
    <body>
		<?php
			$handle = fopen("exercise9.csv", "r");
				while(! feof($handle))
				{
					print_r(fgetcsv($handle));
					echo "<br />";
				}
			fclose($handle);
		?>
    </body>
</html>