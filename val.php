<?php
// define variables and set to empty values.
$firstName_err = $lastName_err = $address_err = $city_err = $state_err = $zip_err = $homePhone_err = $workPhone_err = $cellPhone_err = $email1_err = $email2_err = $method_err = $instrument_err = $ownInstrument_err = $make_err = $model_err = $serialNumber_err = $stand_err = $agree_err = '';
$firstName = $lastName = $address = $city = $zip = $homePhone = $workPhone = $cellPhone = $email1 = $email2 = $instrument = $ownInstrument = $make = $model = $serialNumber = $stand = $agree = '';
$state = array();
$errors = 0;
$successMessage = '';

if (isset($_POST['submit'])) {
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $homePhone = $_POST["homePhone"];
    $workPhone = $_POST["workPhone"];
    $cellPhone = $_POST["cellPhone"];
    $email1 = $_POST["email1"];
    $method = $_POST["method"];
    $instrument = $_POST["instrument"];
    $ownInstrument = $_POST["ownInstrument"];
    $make = $_POST["make"];
    $model = $_POST["model"];
    $serialNumber = $_POST["serialNumber"];
    $stand = $_POST["stand"];
    
    if (empty($_POST["firstName"])) {
        $firstName_err = "First name is required";
        $errors = 1;
    }

    if (empty($_POST["lastName"])) {
        $lastName_err = "Last name is required";
        $errors = 1;
    }


    if (empty($_POST["address"])) {
        $address_err = 'Did you forget where you live?';
        $errors = 1;
    }
    
    if (empty($_POST["city"])) {
        $city_err = "City is required";
        $errors = 1;
    }
    
    if (empty($_POST["state"])) {
        $state_err = 'Please select a state';
        $errors = 1;
    }
    
    if (empty($_POST["zip"])) {
        $zip_err = 'Zip code is required';
        $errors = 1;
    }
    
    if (empty($_POST["homePhone"])) {
        $homePhone_err = 'E.T. will not phone home.';
    }
    
    if (empty($_POST["workPhone"])) {
        $workPhone_err = 'Please leave a message after the tone';
    }
    
    if (empty($_POST["cellPhone"])) {
        $cellPhone_err = 'Answer your phone';
    }
    
    if (!filter_var($_POST["email1"], FILTER_VALIDATE_EMAIL)) {
            $email1_err = "Invalid email format";
            $errors = 1;
    }
    
    if (!isset($_POST["method"])){
        $method_err = "Select a method for contacting you";
        $error = 1;
    }
    
    if (!filter_var($_POST["$email2"], FILTER_VALIDATE_EMAIL)) {
            $email2_err = "Invalid email format";
    }
    
    if (empty($_POST["instrument"])) {
        $instrument_err = "Please tell us what instrument(s) you have played.";
        $errors = 1;
    }
    
    if (empty($_POST["ownInstrument"])) {
        $ownInstrument_err = 'Do you own this instrument?';
        $errors = 1;
    }
    
    if (empty($_POST["make"])) {
        $make_err = 'Pleas enter the make of the instrument';
    }
    
    if (empty($_POST["model"])) {
        $model_err = 'Please enter the model of the instrument';
    }
    
    if (empty($_POST["serialNumber"])) {
        $serialNumber_err = 'Please enter the serial number of the instrument';
    }
    
    if (empty($_POST["stand"])) {
        $stand = 'Do you own a stand?';
        $errors = 1;
    }
    
    if (empty($_POST["agree"])) {
        $agree_err = 'You need to check this box';
        $errors = 1;
    }
    
}

if($errors == 0){
    $successMessage ="Form submitted successfully...";
}

?>
