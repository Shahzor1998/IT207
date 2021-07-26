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
								//delets the row based off of the index that it lies on, then it rearranges the index value and updates the rest of the text file.
								if(isset($_POST['delete'])){
									//checks to see if there is any comments to delete them. only occures if the text file exists.
									if (file_exists("comments.txt")){
										$rows = file("comments.txt");
										$count = count($rows);
										$deletecomment = $_POST['delete']-1;
										unset($rows[$deletecomment]);
										array_values($rows);
										$update_file = fopen("comments.txt", "w");
										fwrite($update_file, implode($rows));
									}
								}
								if(file_exists("comments.txt")){
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
									$comments = file("comments.txt");
									$number_of_comments = count($comments);
									if($number_of_comments >= 1){
										$comment_num = 1;
										for($i=0;$i<$number_of_comments;$i++){
											$row = explode(",", $comments[$i]);
											echo "<p> $comment_num. 
												&nbsp&nbsp <b>Name:</b> <a href='mailto:$row[1]'>$row[0]</a><br />
												&emsp;&ensp; <b>Comments:</b> $row[2]<br /></p>
												<hr />";
												$comment_num++;
										}
										echo "<p><a href='index.php'>Add New Comment</a></p>
											<p><a href='ascending_order.php'>Sort Comments A-Z(by name)</a></p>
											<p><a href='decending_order.php'>Sort Comments Z-A(by name)</a></p>
											
											<form action='viewcomments.php' method='POST'>
												Delete Comment Number: <input type ='text' name='delete' />
												<input type = 'submit' value = 'Delete Comment' />
											</form>";
										
									}
									else {
										echo "<p>No comments to be presented.</p>
											<hr />
											<p><a href='index.php'>Add Comments</a></p>";
									}
								}
								else {
									echo '<p>There are no comments to be presented since the "comments.txt" file doesnt exist</p>';
									echo "<a href='index.php'>Add Comments</a>";
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
