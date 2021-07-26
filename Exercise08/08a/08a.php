<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lab 2</title>
    </head>
    <body>
		<form method="POST" action="08a.php">
			Enter a Sentence: <input type="text" name="sentence_string" /><br /><br />
			Find: <input type="text" name="find_string" />
			Replace with: <input type="text" name="replace_string" /><br /><br />
			<input type="submit" name="submit" value="Submit"/>
			<input type="reset" name="clear" value="Clear" />
		</form>
		<?php
			$sentence = $_POST['sentence_string'];
			$find_string = $_POST['find_string'];
			$replace_string = $_POST['replace_string'];
			
			 if(isset($_POST['submit']))
				{
					if (stripos($sentence, $find_string)>=0){
						echo "<br /><br />The new sentence is now: ";
						echo str_ireplace($find_string, $replace_string, $sentence);
					}						
				}
		?>
    </body>
</html>
