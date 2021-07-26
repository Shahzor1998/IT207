<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lab 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../it207.css" type="text/css" />
		<link rel="stylesheet" href="../finalgrade.css" type="text/css" />
        
    </head>
    <body>
        
        <div class="flex_container"> 
            <div class="left1">
                <?php include("../menu.inc"); ?>
            </div>
            <div class="right1">
                <?php include("../header.php"); ?>
                <div class="right_container">
                    <div> 
						<div class="gradeform">
							<form action="finalgrade.php" method="POST">
								<h2>Final Grade Determiner</h2>
								<h3>Participation</h3>
								<p class="input_grade_values">
								Earned: <input type="text" name="earnedParticipation" required="required">
								Max: <input type="text" name="maxParticipation" required="required">
								Weight (percentage): <input type="text" name="weightParticipation" required="required">
								<h3>Quizzes</h3>
								Earned: <input type="text" name="earnedQuiz" required="required">
								Max: <input type="text" name="maxQuiz" required="required">
								Weight (percentage): <input type="text" name="weightQuiz" required="required">
								<h3>Lab Assignments</h3>
								Earned: <input type="text" name="earnedLab" required="required">
								Max: <input type="text" name="maxLab" required="required">
								Weight (percentage): <input type="text" name="weightLab" required="required">
								<h3>Practica</h3>
								Earned: <input type="text" name="earnedPracticum" required="required">
								Max: <input type="text" name="maxPracticum" required="required">
								Weight (percentage): <input type="text" name="weightPracticum" required="required">
								</p>
								<br><br>
								<input type="submit">
							</form>
						</div>
                    <div class="footer_container"> 
						<p class="footer_content">
							<?php include("../footer.inc"); ?>
							
							This site is for a fictional organization created for academic purposes and does not exist. Certain materials included under the fair use exemption of U.S. Copyright law and have been prepared according to the multimedia fair use guidelines and are restricted from further use.
							<?php echo "<br /><br />", "Current PHP version: " . phpversion(); ?>
						</p>
					</div>
                    
                    </div>
                </div>

            </div>
        </div>
            
    </body>
</html>
