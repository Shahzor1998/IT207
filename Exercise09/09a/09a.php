<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Exercise 09a</title>
    </head>
    <body>
		<?php
			if (get_magic_quotes_gpc() == True){
				echo "Helios server has the GPC setting turned \"ON\"<br />";
			}
			else if (get_magic_quotes_gpc() == False){
				echo "Helios server has the GPC setting turned \"OFF\"<br />";
			}
			if (get_magic_quotes_runtime() == True){
				echo "Helios server has the runtime setting turned \"ON\"<br />";
			}
			else if (get_magic_quotes_runtime() == False){
				echo "Helios server has the runtime setting turned \"OFF\"<br />";
			}
		?>
    </body>
</html>