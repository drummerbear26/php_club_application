<?php
include ('php/form.php');

if ( count($_POST) > 0 ){
		include('php/val.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Saint Paul Police Band Application Form</title>
	<link rel="stylesheet" href="css/caf.css" />
	<script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
	<div id="wrap">
        	<h1>Saint Paul Police Band Application Form</h1>
        	<p class="attn">Fields in gold are required.</p>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            	<input type="hidden" name="submitted"/>
				<div  class="section group">
      				<div class="col span_1_of_2">
                      <fieldset id="name">
      					<legend>Name:</legend>
      					<label for="firstName">First Name:</label><br />
      					<input type="text" id="firstName" name="firstName" placeholder="Enter your first name" require="true" tabindex="1" value="<?php echo $firstName;?>" />
      					<span class="error"><?php echo $firstName_err;?></span>
      					<br /><br />
      					<label for="lastName">Last Name:</label><br />
      					<input type="text" id="lastName" name="lastName" placeholder="Enter your last name" require="true" tabindex="2" value="<?php echo $lastName;?>" />
      					<span class="error"><?php echo $lastName_err;?></span>
      				</fieldset>
      				
      				<fieldset id="addresses">
      					<legend>Address:</legend>
      					<label for="address">Home Address:</label><br />
      					<input id="address" type="text" name="address" placeholder="Enter your address" tabindex="3" value="<?php echo $address;?>" />
      					<span class="error"><?php echo $address_err;?></span>
      					<br /><br />
      					<label for="city">City:</label><br />
      					<input id="city" type="text" name="city" placeholder="Enter your city" require="true" tabindex="4" value="<?php echo $city;?>" />
      					<span class="error"><?php echo $city_err;?></span>
      					<br /><br />
      					<label for="state">State:</label><br />
      					<select id="state" name="state" tabindex="5" value="<?php echo $state;?>">
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
      					<span class="error"><?php echo $state_err;?></span>
      					<br /><br />
      					<label for="zip">Zip Code:</label><br />
      					<input type="text" id="zip" name="zip" placeholder="Enter your zip code" require="true" tabindex="6" value="<?php echo $zip;?>" />
      					<span class="error"><?php echo $zip_err;?></span>
      				</fieldset>
      				
      				<fieldset id="instrument">
      					<legend>Instrumentation:</legend>
      					<label for="instrument">Please list the instrument(s) you play:</label><br />
      					<textarea rows="3" cols="22" name="instrument" placeholder="Enter instrument(s)" tabindex="17"></textarea>
      					<span class="error"><?php echo $instrument_err;?></span>
      					<br /><br />
      					<label for="ownInstrument">Do you own your own musical instrument?</label><br />
      					<input id="ownInstrument" type="radio" name="ownInstrument" <?php if (isset($ownInstrument) && $ownInstrument=="yes") echo "checked";?> value="yes" tabindex="18" /><label> Yes</label><br />
      						<div class="reveal_if_active">
      							<label for="">Please enter:</label><br />
      							<label for="make"><input id="make" type="text" name="make" placeholder="Make" tabindex="20" value="<?php echo $make;?>" />
      							<span class="error"><?php echo $make_err;?></span>
      							</label><br />
      							<label for="model"><input id="model" type="text" name="model" placeholder="Model" tabindex="21" value="<?php echo $model;?>" />
      							<span class="error"><?php echo $model_err;?></span>
      							</label><br />
      							<label for="serialNumber"><input id="serialNumber" type="text" name="serialNumber" placeholder="Serial Number" tabindex="22" value="<?php echo $serialNumber;?>" />
      							<span class="error"><?php echo $serialNumber_err;?></span>
      							</label><br /><br />
      						</div>
      					<label><input id="ownInstrument" type="radio" name="ownInstrument" <?php if(isset($ownInstrument) && $ownInstrument=="no") echo "checked";?> value="no" tabindex="19" /> No</label>
      					<span class="error"><?php echo $ownInstrument_err;?></span>
      					<br /><br />
      			
      					<label for="stand">Do you have a portable music stand?</label><br />
      					<label><input id="stand" type="radio" name="stand" <?php if(isset($stand) && $stand=="yes") echo "checked";?> value="yes" tabindex="23" /> Yes</label><br />
      					<label><input id="stand" type="radio" name="stand" <?php if(isset($stand) && $stand=="no") echo "checked";?> value="no" tabindex="24" /> No</label>
      					<span class="error"><?php echo $stand_err;?></span>
      					<br /><br />
      				</fieldset>
      				</div>
				
    				<div class="col span_1_of_2">
    				<fieldset id="contact">
    					<legend>Contact:</legend>
    					<label for="homePhone">Home Phone:</label><br />
    					<input id="homePhone" type="tel" name="homePhone" placeholder="Enter home phone" tabindex="7" value="<?php echo $homePhone;?>" />
    					<span class="error"><?php echo $homePhone_err;?></span>
    					<br /><br />
    					<label for="workPhone">Work Phone:</label><br />
    					<input id="workPhone" type="tel" name="workPhone" placeholder="Enter work phone" tabindex="8" value="<?php echo $workPhone;?>" />
    					<span class="error"><?php echo $workPhone_err;?></span>
    					<br /><br />
    					<label for="cellPhone">Cell Phone:</label><br />
    					<input id="cellPhone" type="tel" name="cellPhone" placeholder="Enter cell phone" tabindex="9" value="<?php echo $cellPhone;?>" />
    					<span class="error"><?php echo $cellPhone_err;?></span>
    					<br /><br />
    					<label for="email1">Email Address:</label><br />
    					<input id="email1" type="text" name="email1" placeholder="Enter email address" tabindex="10" value="<?php echo $email1;?>" />
    					<span class="error"><?php echo $email1_err;?></span>
    					<br /><br />
    					<label for="email2">Want to enter another email address?</label><br />
    					<input id="email2" type="radio" name="email2" <?php if (isset($email2) && $email2=="yes") echo "checked";?> value="<?php echo $email2;?>" tabindex="11" /><label> Yes</label><br />
    						<div class="reveal_if_active">
    							<label for="another_email"><input id="another_email" type="text" name="another_email" placeholder="Another email address" value="<?php echo $email2;?>" />
    							<span class="error"><?php echo $email2_err;?></span></label>
    							<br /><br />
    						</div>
    					<label><input id="email2" type="radio" name="email2" <?php if (isset($email2) && $email2=="no") echo "checked";?> value="<?php echo $email2;?>" tabindex="12" /> No</label>
    					<br /><br />
    					<label for="method">Preferred method of contacting you:</label><br />
    					<label for=""><input type="checkbox" name="method" tabindex="13" /> Home phone</label><br />
    					<label for=""><input type="checkbox" name="method" tabindex="14" /> Work phone</label><br />
    					<label for=""><input type="checkbox" name="method" tabindex="15" /> Cell phone</label><br />
    					<label for=""><input type="checkbox" name="method" tabindex="16" /> Email</label>
    				</fieldset>
    				
    				<fieldset id="acknowledgement">
    					<legend>Acknowledgement:</legend>
    					<label for="agree"><input id="agree" type="checkbox" name="agree" require="true" tabindex="25" value="<?php echo $agree;?>"  onClick="appsub()" /> By checking this box, you agree to the following: <span class="error"><?php echo $agree_err;?></span></label>
    					
    					<p>I hereby agree to conduct myself in a manner beneficial to the City of Saint Paul and the Saint Paul Police Department, to obey the laws of the state and the by-laws of the Saint Paul Police Band Association, to attend all rehearsals and performances, and to care for properly any instrument, equipment, uniform, and/or any other Band property which may come into my possession while a member of the Band.  I also agree not to hold the City of Saint Paul or the Saint Paul Police Band Association, its officers or members, liable for any injuries incurred or to any damage to my property while performing with the Band.  I also agree that I will make all public appearances of the Band provided that exceptions must be approved by the executive board of the Band.</p>
    				</fieldset>
    				</div>
				</div>
				
				<div class="foot_nav">
	            	<input type="reset" value="Clear" class="reset" />
					<input type="button" value="Submit" id="submit" disabled />
            	</div>
            	<div class="success"><?php echo $successMessage;?></div>
            </form>
			
			<p></p>
			
            <div class="list">
            	<table>
            		<tr>
            			<th>First Name</th>
            			<th>Last Name</th>
            			<th>Address</th>
            			<th>City</th>
            			<th>State</th>
            			<th>Zip</th>
            			<th>Home Phone</th>
            			<th>Work Phone</th>
            			<th>Cell Phone</th>
            			<th>Email</th>
            			<th>Instrument(s)</th>
            			<th>Own Instrument</th>
            			<th>Make</th>
            			<th>Model</th>
            			<th>Serial Number</th>
            			<th>Stand</th>
            		</tr>
            		<?php
            			foreach ($band_row as $row) {
            				$parts = explode(',', $row);
            				echo "<tr class='table_row $row_class'>";
            				foreach ($parts as $element) {
            					echo "<td>".$element."</td>";
            				}
            				echo "</tr>";
            				
            				if($row_class === "odd"){
            					$row_class = "even";
            				} else if($row_class === "even"){
            					$row_class = "odd";
            				}
            			}
            		?>
            	</table>
            </div>
  </body>
</html>