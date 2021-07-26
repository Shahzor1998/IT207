<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Adding Comments DB</title>
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
							<?php
								//executes if the user filled out the name and email on the comment post.
								if(isset($_POST['name'], $_POST['email'])){
									$finder_num = 0;
									$name = $_POST['name'];
									$email = $_POST['email'];
									$comment = $_POST['comment'];
									
									$user = 'skhan204';
									$pass = 'roarewud';
									$db = 'skhan204';
									
									$db_connection = mysqli_connect('helios.vse.gmu.edu', $user, $pass) or die('Could not connect to the Database.');
									
									if($db_connection){
										mysqli_query($db_connection, "USE $db");
										
										//Uses the skhan204 Database.
										$finder_num = 0;
										$comment_table = mysqli_query($db_connection, "SELECT commentID,commentName,commentEmail,commentMessage FROM IT207_Lab4_Comments");
										$rows = mysqli_num_rows($comment_table);
										if($rows > 0){
											$num = 1;
											for($i=0;$i<$rows;$i++){
												mysqli_data_seek($comment_table, $i);
												$row = mysqli_fetch_row($comment_table);
												if(strcasecmp($name, $row[1])==0){
													$finder_num =1;
													break;
												}
											}
											//Displays that the comment is not added because the entry was already placed by the same user based off name.
											if($finder_num == 1){
												echo "<h1>Comments Not Added</h1>
													<hr />
													<p>One Comment per person!!! You have already left comments for this posting.</p>
													<hr />
													<a href = 'db_index.php'>Someone Else Want to Comment?</a><br/>
													<a href = 'db_viewcomments.php'>View comments(Database Version)</a>";
											}
											
											if(mysqli_query($db_connection, "INSERT INTO IT207_Lab4_Comments(commentName,commentEmail,commentMessage) VALUES ('$name','$email','$comment')")){
												echo "<h1>Comments Added</h1>
													<hr />
													<p>
														<b>Name:</b> <a href='mailto:$email'>$name</a><br />
														<b>Comment:</b> $comment
													</p>
													<hr />
													<a href = 'db_index.php'>Someone Else Want to Comment?</a><br/>
													<a href = 'db_viewcomments.php'>View comments(Database Version)</a>";
												}
										}
										//opens file and finds the name and commetnt and displays it if there are not previous entries by the same user.
										else {
											if(mysqli_query($db_connection, "INSERT INTO IT207_Lab4_Comments(commentName,commentEmail,commentMessage) VALUES ('$name','$email','$comment')")){
												echo "<h1>Comments Added</h1>
													<hr />
													<p>
														<b>Name:</b> <a href='mailto:$email'>$name</a><br />
														<b>Comment:</b> $comment
													</p>
													<hr />
													<a href = 'db_index.php'>Someone Else Want to Comment?</a><br/>
													<a href = 'db_viewcomments.php'>View comments(Database Version)</a>";
											}
										}
									}			
								}
								else {
									echo '<h1>ERROR Entry!!!</h1>
										You have not enterd all the details to submit the comment.<br />
										Please press "back" button to go back and fill all information or press the "Return to Home Page" button below.<br />
										<a href = "index.php">Return to Home Page</a><br/>';
								}
							?>
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
