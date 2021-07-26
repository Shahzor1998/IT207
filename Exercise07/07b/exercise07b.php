<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lab 2</title>
    </head>
    <body>
		<?php 
			$to1 = $_POST['to1'];
			$to2 = $_POST['to2'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			
			if (empty($to1) or empty($to2) or empty($subject) or empty($message)){
				echo "All of the fields must have an entry provided. either TO, Subject, or Message was left empty";
				echo "<br /><br />";
				
			}
			else{
				$response = mail($to1, $to2, $subject, $message, "From: <skhan204@masonlive.gmu.edu>");
				echo $response;
				if ($response == 1){
					echo "The message was sent <b>successfully</b>!!!!";
				}
				else if ($response == 0) {
					echo "<br /><br />The message was <b>NOT Successful</b> at sending!!!!!";
				}
			}
		?>
		
    </body>
</html>
