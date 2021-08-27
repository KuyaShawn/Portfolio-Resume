<?php

//Make sure the user is coming from the form
if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {

    //Send user to form page
    header("location: guestbook.php");
}

require('includes/functions.php');
require('includes/php_setup.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon CSS -->
    <link href="images/mail.png" type="image/png" rel="Mail icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <title>Thank You!</title>
</head>
<body>
<div class="container" id="main">
    <h1 class="text-center">Thank you!</h1>
    <h3 >Input Summary</h3>
    <?php
    /*
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    */

    $first_name = mysqli_real_escape_string($cnxn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($cnxn, $_POST['last_name']);
    $job_title = mysqli_real_escape_string($cnxn, $_POST['job_title']);
    $company = mysqli_real_escape_string($cnxn, $_POST['company']);
    $email = mysqli_real_escape_string($cnxn, $_POST['email']);
    $linkedin = mysqli_real_escape_string($cnxn, $_POST['linkedin']);
    $met = mysqli_real_escape_string($cnxn, $_POST['met']);
    $other = mysqli_real_escape_string($cnxn, $_POST['other']);
    $msg = mysqli_real_escape_string($cnxn, $_POST['msg']);
    $format = mysqli_real_escape_string($cnxn, $_POST['format']);
    $datestamp = date('y/m/d H:i:s');

    $includes = '';
    $location = '';


    // ---- SERVER-SIDE VALIDATION ----
    $isValid = true;
    if(!validateName($first_name)){
        echo "<p>First name is required and must be at least two characters.</p>";
        $isValid = false;
    }
    if(!validateName($last_name)){
        echo "<p>Last name is required and must be at least two characters.</p>";
        $isValid = false;
    }
    if(!validateURL($linkedin)){
        echo "<p>URL must contain an http and/or .com</p>";
        $isValid = false;
    }
    if(!validateEmail($email)){
        echo "<p>Email must contain an '@' symbol and/or 'dot (.)'</p>";
        $isValid = false;
    }
    if(!validateMet($met)){
        echo "<p>Please select a valid location</p>";
        $isValid = false;
    }
    if(!empty($_POST['add_mailling']) && $_POST['add_mailling'] === "add_mailling"){
        $includes = 'Yes';
        if(!validateM_list($email)){
            echo "<p>You forgot to enter an email</p>";
            $isValid = false;
        }
    }
    if(empty($_POST['add_mailling'] && $_POST['add_mailling'] === "")){
        $includes = 'No';
    }
    if (!validMethod($format)) {
        echo "<p>Stop what you're doing there! Partner.</p>";
        return;
    }
    if(!$isValid){
        echo "<p>Something Broke. Please Reload back to the Guessbook Page and refill it again</p>";
        return;
    }

    // Output data
    echo "<p>Name: $first_name $last_name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Linkedin: $linkedin</p>";
    echo "<p>Where we met: $met</p>";
    echo "<p>Added to mailing? $includes</p>";
    echo "<p>Message: $msg</p>";
    echo "<p>Format: $format</p>";



    $sql = "INSERT INTO guestbook VALUES ('$first_name', '$last_name', '$job_title', '$company', '$email', '$linkedin', '$datestamp', '$msg', '$location', '$format','$includes',DEFAULT)";
    //echo $sql;
    $success = mysqli_query($cnxn, $sql);

    if ($success) {
        echo "<br>";
        echo "<p class='text-center'>Hello $first_name $last_name, 
    I appreciate you for putting time into signing my guestbook!</p>";
    } else {
        echo "<p>Something went wrong</p>";
    }

    ?>
</div>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>