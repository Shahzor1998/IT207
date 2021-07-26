<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Adding Comments</title>
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
								$user = 'skhan204';
								$pass = 'roarewud';
								$db = 'skhan204';
								
								$db_connection = mysqli_connect('helios.vse.gmu.edu', $user, $pass) or die('Could not connect to the Database.');
								
								if($db_connection){
									echo '
										<h2>Huh?</h2>
										<p>
											Krischer and Karpinski report that:<br />
											Students who used social networking sites while studying scored 20% lower on tests and students who used social media had <br />
											GPA of 3.06 versus non-users who had an average GPA of 3.82.<br />
											Source: Paul A. Kirschner and Aryn C. Karpinski," Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010
										</p>
										<h1>Comments</h1>
										<hr />	
									';
									mysqli_query($db_connection, "USE $db");
									if(intval($_POST['delete'])){
										$del_comment_number = $_POST['delete'];
										if(mysqli_query($db_connection, "DELETE FROM IT207_Lab4_Comments WHERE commentID = $del_comment_number")){
											echo "<h3>The Chosen Comment was Deleted</h3>";
										}
										else {
											echo "Error: DELETE FROM IT207_Lab4_Comments WHERE commentID=$del_comment_number" . "<br />" . mysqli_error($db_connection);
										}
									}
									$comment_table = mysqli_query($db_connection, "SELECT commentID,commentName,commentEmail,commentMessage FROM IT207_Lab4_Comments");
									$rows = mysqli_num_rows($comment_table);
									if($rows > 0){
										$num = 1;
										$count_id = 0;
										mysqli_query($db_connection, "UPDATE IT207_Lab4_Comments SET IT207_Lab4_Comments.commentID = $count:= $count + 1");
										$value = mysqli_query(db_connection ,"MAX(connectID)");
										mysqli_query($db_connection, "ALTER TABLE IT207_Lab4_Comments AUTO_INCREMENT = $value");
										for($i=0;$i<$rows;$i++){
											mysqli_data_seek($comment_table, $i);
											$row = mysqli_fetch_row($comment_table);
											echo "<p> $row[0]. 
												&nbsp&nbsp <b>Name:</b> <a href='mailto:$row[2]'>$row[1]</a><br />
												&emsp;&ensp; <b>Comments:</b> $row[3]<br /></p>
												<hr />";
												$num++;
										}
										echo "<p><a href='db_index.php'>Add New Comment</a></p>
											<p><a href='db_ascending_order.php'>Sort Comments A-Z(by name)</a></p>
											<p><a href='db_decending_order.php'>Sort Comments Z-A(by name)</a></p>
											
											<form action='db_viewcomments.php' method='POST'>
												Delete Comment Number: <input type ='text' name='delete' />
												<input type = 'submit' value = 'Delete Comment' />
											</form>";
									}
									else {
										echo "<p>No comments to be presented.</p>
											<hr />
											<p><a href='db_index.php'>Add Comments</a></p>";
									}
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
