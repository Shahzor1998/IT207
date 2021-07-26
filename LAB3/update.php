<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lab 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../it207.css" type="text/css" />
		<link rel="stylesheet" href="contacts.css" type="text/css" />
        
    </head>
    <body>
        
        <div class="flex_container"> 
            <div class="left1">
                <?php include("../menu.inc"); ?>
            </div>
            <div class="right1">
                <?php include("../header.php"); ?>
                <div class="right_container">
						<div class="main_container">
							<div class ="update">
								<?php
									if(file_exists("contacts.txt")){
										if (isset($_POST["new_first_name"], $_POST["new_last_name"], $_POST["new_email"], $_POST["new_number"], $_POST["new_address"], $_POST["new_city"], $_POST["new_state"], $_POST["new_zipcode"])){
											$update_entry = "**" . $_POST["new_first_name"] . "," .  $_POST["new_last_name"] . "," . $_POST["new_email"] . "," . $_POST["new_number"] . "," . $_POST["new_address"] . "," . $_POST["new_city"] . "," . $_POST["new_state"] . "," . $_POST["new_zipcode"] . "\n";
											$read_file = fopen("contacts.txt", "rt");
											$file_content = file_get_contents("contacts.txt");
											$records = explode("**", $file_content);
											$count = count($records);
											for ($i=1;$i<$count;$i++){
												$record = explode(",", $records[$i]);
												
												if ((!strcasecmp($record[0], $_POST['new_first_name'])) && (!strcasecmp($record[1], $_POST['new_last_name']))){
													$records[$i] = $update_entry;
													$write_file = fopen("contacts.txt", "w");
													if (flock($write_file, LOCK_EX)) { 
														if (fwrite($write_file,$records[$i])>0){
															echo "<p> Edit was successful!!!!! </p>";
														}
														else {
															echo "<p> Edit was <b>NOT</b> successful </p>";
														}
														flock($read_file, LOCK_UN);
														fclose($write_file);
													}
													else{
														echo "could not get the lock for the page.";
													}
												}
											}
											fclose($read_file);
										}	
									}
								?>
								<br />
								<br />
								<a href="index.php">Return to Directory<a>
							</div>
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
