<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Comment Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../it207.css" type="text/css" />
		<link rel="stylesheet" href="comments.css" type="text/css" />
        
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
						<div class="main_container">
							<h2>Huh?</h2>
							<p>
								Krischer and Karpinski report that:<br />
								Students who used social networking sites while studying scored 20% lower on tests and students who used social media had <br />
								GPA of 3.06 versus non-users who had an average GPA of 3.82.<br />
								Source: Paul A. Kirschner and Aryn C. Karpinski," Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010
							</p>
							<h1>Add Comments</h1>
							<hr />
							<div class ="commentform"> 
								<form action="addcomments.php" method="POST">
									Name: <input type="text" name="name">
									<br />
									<br />
									Email: <input type="email" name="email">
									<br />
									<br />
									Comments: <textarea name="comment" rows="3" cols="60"></textarea>
									<br />
									<br />
									<b><input type="submit" name="submit" value="Sign"/></b>
									<b><input type="reset" name="reset" value="Reset Form"/></b>
									<input type="hidden" name="comment_info"/>
									<br />	
								</form>
							</div>
							<hr />
							<a href="viewcomments.php"><b>View Posting Comments</b><a>
							<br />
							<a href="db_index.php"><b>Add Comments(Database Version) </b><a>
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
