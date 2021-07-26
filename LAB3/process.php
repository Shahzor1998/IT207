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
                    <div> 
						<div class="main_container">
							<div class ="contactform"> 
								<?php
									//determines if we clicked submit using the index page or the add page. 
									if ($_POST['form'] == 'search'){
										if (isset($_POST['search'])){
											//validates if the inputs are enterd otherwise it gives you the displayed errors.
											if (empty($_POST['first_name'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
												echo "<a href='index.php'>Return to Directory<a>";
											}
											else if (empty($_POST['last_name'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
												echo "<a href='index.php'>Return to Directory<a>";
											}
											
											//Finds the inputs in the text file and checks to see if they exist or not. 
											//If the inputs do exist in the file it will open up a update page. 
											//If the inputs do not exist in the file it will go to add page. 
											if (isset($_POST['first_name'], $_POST['last_name'])){
												$found_contact = 0;
												$first_name = $_POST['first_name'];
												$last_name = $_POST['last_name'];
												
												//opens a text file to find the inputs that match with the records.
												$read_file = fopen("contacts.txt", "r");
												flock($read_file, LOCK_SH);
												$file_content = file_get_contents("contacts.txt");
												$records = explode("**", $file_content);
												$count = count($records);
												for ($i=1;$i<$count;$i++){
													$record = explode(",", $records[$i]);
													if ((!strcasecmp($record[0],$first_name)) && (!strcasecmp($record[1],$last_name))){
														$found_contact = 1;
														print_r($record);
														echo "<form method ='post' action ='update.php'>
																<h2>Updating Contact</h2> 
																<h3>Entering Updated Contact Information</h3>
																First Name: <input type ='text' name ='new_first_name' value = '{$record[0]}'>
																&nbsp;&nbsp;
																Last Name: <input type ='text' name ='new_last_name' value = '{$record[1]}'><br/><br/>
																Email Address: <input type ='text' name='new_email' value = '{$record[2]}'><br/><br/>
																Phone Number: <input type = 'text' name='new_number' value = '{$record[3]}'><br/><br/>
																Address: <input type = 'text' name ='new_address' value = '{$record[4]}'>
																&nbsp;&nbsp;
																City: <input type ='text' name ='new_city' value = '{$record[5]}'><br/><br/>
																State: <select name ='new_state' value = '{$record[6]}'>
																	<option value='userChoice' selected>$record[6]</option>
																	<option value='AL'>Alabama</option>
																	<option value='AK'>Alaska</option>
																	<option value='AZ'>Arizona</option>
																	<option value='AR'>Arkansas</option>
																	<option value='CA'>California</option>
																	<option value='CO'>Colorado</option>
																	<option value='CT'>Connecticut</option>
																	<option value='DE'>Delaware</option>
																	<option value='DC'>District Of Columbia</option>
																	<option value='FL'>Florida</option>
																	<option value='GA'>Georgia</option>
																	<option value='HI'>Hawaii</option>
																	<option value='ID'>Idaho</option>
																	<option value='IL'>Illinois</option>
																	<option value='IN'>Indiana</option>
																	<option value='IA'>Iowa</option>
																	<option value='KS'>Kansas</option>
																	<option value='KY'>Kentucky</option>
																	<option value='LA'>Louisiana</option>
																	<option value='ME'>Maine</option>
																	<option value='MD'>Maryland</option>
																	<option value='MA'>Massachusetts</option>
																	<option value='MI'>Michigan</option>
																	<option value='MN'>Minnesota</option>
																	<option value='MS'>Mississippi</option>
																	<option value='MO'>Missouri</option>
																	<option value='MT'>Montana</option>
																	<option value='NE'>Nebraska</option>
																	<option value='NV'>Nevada</option>
																	<option value='NH'>New Hampshire</option>
																	<option value='NJ'>New Jersey</option>
																	<option value='NM'>New Mexico</option>
																	<option value='NY'>New York</option>
																	<option value='NC'>North Carolina</option>
																	<option value='ND'>North Dakota</option>
																	<option value='OH'>Ohio</option>
																	<option value='OK'>Oklahoma</option>
																	<option value='OR'>Oregon</option>
																	<option value='PA'>Pennsylvania</option>
																	<option value='RI'>Rhode Island</option>
																	<option value='SC'>South Carolina</option>
																	<option value='SD'>South Dakota</option>
																	<option value='TN'>Tennessee</option>
																	<option value='TX'>Texas</option>
																	<option value='UT'>Utah</option>
																	<option value='VT'>Vermont</option>
																	<option value='VA'>Virginia</option>
																	<option value='WA'>Washington</option>
																	<option value='WV'>West Virginia</option>
																	<option value='WI'>Wisconsin</option>
																	<option value='WY'>Wyoming</option>
																</select>
																&nbsp;&nbsp;
																Zipcode <input type = 'text' name='new_zipcode' value = '{$record[7]}'>
																<input type = 'submit' name='update value='Update'>
																<input type='hidden' name='old_entry' value='$record[$i]' />
															</form>
															<a href='index.php'>Return to Directory<a>";
															
													}
												}
												if (isset($first_name) && isset($last_name) && $found_contact == 0){
													echo "The Contact was NOT FOUND
														<br />
														<br />
														<a href='index.php'>Return to Directory<a>";
												}
												flock($read_file, LOCK_UN);
												fclose($read_file);
											}
										}
									}
									else if($_POST['form'] == 'add'){
										if (isset($_POST['search'])){
											if (empty($_POST['first_name'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['last_name'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['email'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['phone'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['address'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['city'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['state'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											else if (empty($_POST['zipcode'])){
												echo "<p>ERROR!!!! You must enter a value in each field. Click your browser's Back button to return to the form</p>";
											}
											
											//adds the form inputs into an array that is placed into a text file
											if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['zipcode'])){
												$first_name = $_POST["first_name"];
												$last_name = $_POST["last_name"];
												$email = $_POST["email"];
												$number = $_POST["phone"];
												$add = $_POST["address"];
												$city = $_POST["city"];
												$state = $_POST["state"];
												$zipcode = $_POST["zipcode"];
												$new_entry = "**".$first_name.",".$last_name.",".$email.",".$number.",".$add.",".$city.",".$state.",".$zipcode . "\n";
												$write_file = fopen("contacts.txt","at");
												if (flock($write_file, LOCK_EX)) { 
													if(fwrite($write_file,$new_entry)>0){
														echo "<p>Contact has been added successfully</p>";
														echo '<a href="index.php">Return to Directory<a>';
													}
													else{
														echo"<p>Contact is not added</p>";
														echo '<a href="index.php">Return to Directory<a>';
													} 
													flock($write_file, LOCK_UN);
												}
												else {
													echo "Could not get a lock for the page.";
												}
											}
											else{
												echo "<p> Please Enter all the data in the fields</p>";
												echo '<a href="index.php">Return to Directory<a>';
											}
										}
									}
								?>
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
