<?php

// define variables and set to empty values.
$firstName_err = $lastName_err = $address_err = $city_err = $state_err = $zip_err = $homePhone_err = $workPhone_err = $cellPhone_err = $email1_err = $email2_err = $method_err = $instrument_err = $ownInstrument_err = $make_err = $model_err = $serialNumber_err = $stand_err = $agree_err = '';

$firstName = $lastName = $address = $city = $zip = $homePhone = $workPhone = $cellPhone = $email1 = $email2 = $instrument = $ownInstrument = $make = $model = $serialNumber = $stand = $agree = '';
$state = array();
$errors = 0;
$successMessage = '';
$row_class = "odd";

$states = array (
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PA'=>'PENNSYLVANIA',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
);

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
	
	file_put_contents($raw_file, $new_line, FILE_APPEND);
}
	
$file = file_get_contents("band.csv");
$band_row = str_getcsv($file, "\n");
array_splice($band_row, 0, 1);

?>