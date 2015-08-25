<?php
	
	if (count($_POST) > 0){
		include('val.php');
	}
	
	$raw_file = "band.csv";
	
	if(isset($_POST['submitted'])) {
		$new_line = "\n";
		$new_line .= $_POST['firstName'];
		$new_line .= ",";
		$new_line .= $_POST['lastName'];
		$new_line .= ",";
		$new_line .= $_POST['address'];
		$new_line .= ",";
		$new_line .= $_POST['city'];
		$new_line .= ",";
		$new_line .= $_POST['state'];
		$new_line .= ",";
		$new_line .= $_POST['zip'];
		$new_line .= ",";
		$new_line .= $_POST['homePhone'];
		$new_line .= ",";
		$new_line .= $_POST['workPhone'];
		$new_line .= ",";
		$new_line .= $_POST['cellPhone'];
		$new_line .= ",";
		$new_line .= $_POST['email1'];
		$new_line .= ",";
		$new_line .= $_POST['instrument'];
		$new_line .= ",";
		$new_line .= $_POST['ownInstrument'];
		$new_line .= ",";
		$new_line .= $_POST['make'];
		$new_line .= ",";
		$new_line .= $_POST['model'];
		$new_line .= ",";
		$new_line .= $_POST['serialNumber'];
		$new_line .= ",";
		$new_line .= $_POST['stand'];
		$new_line .= ",";
		
		file_put_contents($raw_file, $new_line, FILE_APPEND);
	}
	
	$file = file_get_contents($raw_file);
	$band_row = str_getcsv($file, "\n");
	array_splice($band_row, 0, 1);
	
	
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <link rel="stylesheet" href="css/ui.css" type="text/css" />
        <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.min.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/ui.js"></script>
    </head> 
    <body>
        <div id="wrap">
            <h1>Saint Paul Police Band Application Form</h1>
            <p class="attn">Fields in gold are required.</p><br /><br />
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="accordion">
            
                <h3>Name &amp; Address</h3>
                <div class="clearfix">
                
                    <div class="left">
                        <label for="firstName">First Name:</label><br />
                        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" require="true" tabindex="1" value="<?php echo htmlspecialchars($firstName); ?>" />
                        <span class="error"><?php echo $firstName_err; ?></span>
                        <br /><br />
                        <label for="lastName">Last Name:</label><br />
                        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" require="true" tabindex="2" value="<?php echo htmlspecialchars($lastName); ?>" />
                        <span class="error"><?php echo $lastName_err; ?></span>
                    </div>
                    <div class="center">
                        <label for="address">Home Address:</label><br />
                        <input id="address" type="text" name="address" placeholder="Enter your address" require="true" tabindex="3" value="<?php echo htmlspecialchars($address); ?>" />
                        <span class="error"><?php echo $address_err; ?></span>
                        <br /><br />
                        <label for="city">City:</label><br />
                        <input id="city" type="text" name="city" placeholder="Enter your city" require="true" tabindex="4" value="<?php echo htmlspecialchars($city); ?>" />
                        <span class="error"><?php echo $city_err; ?></span>
                    </div>
                    <div class="right">
                    
                        <label for="state">State:</label><br />
                        <select id="state" name="state" require="true" tabindex="5" value="<?php echo $state; ?>">
                        <option value""></option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                        </select>
                        <span class="error"><?php echo $state_err; ?></span>
                        <br /><br />
                        <label for="zip">Zip Code:</label><br />
                        <input type="text" id="zip" name="zip" placeholder="Enter your zip code" require="true" tabindex="6" value="<?php echo htmlspecialchars($zip); ?>" />
                        <span class="error"><?php echo $zip_err; ?></span>
                    </div>
                
                </div>
                <!--<h3>Address</h3>-->
                <!--<div>-->
                
                
                
                <!--</div>-->
                <h3>Contact</h3>
                <div class="clearfix">
                    <div class="left">
                        <label for="homePhone">Home Phone:</label><br />
                        <input id="homePhone" type="tel" name="homePhone" placeholder="Enter home phone" tabindex="7" value="<?php echo htmlspecialchars($homePhone); ?>" />
                        <br /><br />
                        <label for="workPhone">Work Phone:</label><br />
                        <input id="workPhone" type="tel" name="workPhone" placeholder="Enter work phone" tabindex="8" value="<?php echo htmlspecialchars($workPhone); ?>" />
                        <br /><br />
                        <label for="cellPhone">Cell Phone:</label><br />
                        <input id="cellPhone" type="tel" name="cellPhone" placeholder="Enter cell phone" tabindex="9" value="<?php echo htmlspecialchars($cellPhone); ?>" />
                    </div>
                    <div class="center">
                        <label for="email1">Email Address:</label><br />
                        <input id="email1" type="text" name="email1" placeholder="Enter email address" require="true" tabindex="10" value="<?php echo htmlspecialchars($email1); ?>" />
                        <span class="error"><?php echo $email1_err; ?></span>
                        <br /><br />
                        <label for="email2">Want to enter another email address?</label><br />
                        <label>
                        <input id="email2" type="radio" name="email2" value="Yes" <?php if (isset($email2) && $email2 == "Yes") echo "checked"; ?> tabindex="11" /> Yes<br />
                        <div class="reveal_if_active">
                            <label for="another_email">Please enter another email address<br />
                            <input id="another_email" type="text" name="another_email" placeholder="Another email address" value="<?php echo htmlspecialchars($email2); ?>" />
                            </label>
                        </div>
                        </label><br />
                        <label>
                        <input id="email2" type="radio" name="email2" value="No" <?php if (isset($email2) && $email2 == "No") echo "checked"; ?> tabindex="12" /> No
                        </label>
                    </div>
                    <div class="right">
                        <label for="method">Preferred method of contacting you:</label><br />
                        <input type="checkbox" name="method" tabindex="13" value="Home" <?php if(isset($method) && $method == "Home") echo "checked"; ?> /> Home phone <br />
                        <input type="checkbox" name="method" tabindex="14" value="Work" <?php if(isset($method) && $method == "Work") echo "checked"; ?> /> Work phone <br />
                        <input type="checkbox" name="method" tabindex="15" value="Cell" <?php if(isset($method) && $method == "Cell") echo "checked"; ?> /> Cell phone <br />
                        <input type="checkbox" name="method" tabindex="16" value="Email" <?php if(isset($method) && $method == "Email") echo "checked"; ?> /> Email 
                    </div>
                
                </div>
                <h3>Instrumentation</h3>
                <div class="clearfix">
                    <div class="left">
                        <label for="instrument">Please list the instrument(s) you play:</label><br />
                        <textarea rows="3" cols="22" name="instrument" placeholder="Enter instrument(s)" tabindex="17"></textarea>
                        <!--<input type="textarea" name="instrument" id="instrument" placeholder="Enter instrument(s)" require="true"  value="<?php htmlspecialchars($instrument); ?>"/>-->
                        <span class="error"><?php echo $instrument_err; ?></span>
                    </div>
                    <div class="center">
                        <label for="ownInstrument">Do you own your own musical instrument?</label><br />
                        <label>	
                        <input id="ownInstrument" type="radio" name="ownInstrument" value="Yes" <?php if (isset($ownInstrument) && $ownInstrument == "Yes") echo "checked"; ?> require="true" tabindex="18" /> Yes<br />
                        <div class="reveal_if_active">
                            <label for="">Please enter:</label><br />
                            <label for="make">Make: 
                            <input id="make" type="text" name="make" placeholder="Enter Make" tabindex="20" value="<?php echo htmlspecialchars($make); ?>" />
                            </label><br />
                            <label for="model">Model: 
                            <input id="model" type="text" name="model" placeholder="Enter Model" tabindex="21" value="<?php echo htmlspecialchars($model); ?>" />
                            </label><br />
                            <label for="serialNumber">Serial number: 
                            <input id="serialNumber" type="text" name="serialNumber" placeholder="Enter Serial Number" tabindex="22" value="<?php echo htmlspecialchars($serialNumber); ?>" />
                            </label><br /><br />
                        </div>
                        </label><br />
                        <label>
                        <input id="ownInstrument" type="radio" name="ownInstrument" value="No" <?php if(isset($ownInstrument) && $ownInstrument == "No") echo "checked"; ?> tabindex="19" /> No
                        </label>
                        <span class="error"><?php echo $ownInstrument_err; ?></span>
                    </div>
                    <div class="right">
                        <label for="stand">Do you have a portable music stand?</label><br />
                        <label>
                        <input id="stand" type="radio" name="stand" value="Yes"<?php if(isset($stand) && $stand =="Yes") echo "checked"; ?> tabindex="23" /> Yes
                        </label><br />
                        <label>
                        <input id="stand" type="radio" name="stand" value="No" <?php if(isset($stand) && $stand == "No") echo "checked"; ?> tabindex="24" /> No
                        </label>
                        <span class="error"><?php echo $stand_err; ?></span>
                    </div>
                </div>
                <h3>Acknowledgement</h3>
                <div>
                <label for="agree"><input class="agree" type="checkbox" name="agree" require="true" tabindex="25" value="agree" <?php if(isset($agree) && $agree == "agree") echo "checked"; ?> /> By checking this box, you agree to the following: </label><br /><br />
                <span class="error"><?php echo $agree_err; ?></span>
                <p>I hereby agree to conduct myself in a manner beneficial to the City of Saint Paul and the Saint Paul Police Department, to obey the laws of the state and the by-laws of the Saint Paul Police Band Association, to attend all rehearsals and performances, and to care for properly any instrument, equipment, uniform, and/or any other Band property which may come into my possession while a member of the Band.  I also agree not to hold the City of Saint Paul or the Saint Paul Police Band Association, its officers or members, liable for any injuries incurred or to any damage to my property while performing with the Band.  I also agree that I will make all public appearances of the Band provided that exceptions must be approved by the executive board of the Band.</p>
                </div>
                <h3>Clear &amp; Submit</h3>
                <div class="foot_nav">
                <input type="reset" name="reset" value="Clear" class="reset"/>
                <input type="submit" name="submit" value="Submit" class="submit" />
                </div>
                <h3>Results</h3>
                <div class="list">
                <table>
                <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td>Zip</td>
                <td>Home Phone</td>
                <td>Work Phone</td>
                <td>Cell Phone</td>
                <td>Email</td>
                <td>Instrument(s)</td>
                <td>Own Instrument</td>
                <td>Make</td>
                <td>Model</td>
                <td>Serial Number</td>
                <td>Stand</td>
                </tr>
                <?php
                foreach ($band_row as $row) {
                $parts = explode(',', $row);
                echo "<tr>";
                foreach ($parts as $element) {
                echo "<td>".$element."</td>";
                }
                echo "</tr>";
                }
                ?>
                </table>
                </div>
            </form>
        </div>
    </body>
</html>