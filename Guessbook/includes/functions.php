<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// ---- SERVER-SIDE VALIDATION ----
// validates name
function validateName($name)
{
    return !empty($name) && strlen($name) >= 2;
}

// validates Linkedin if given
function validateURL($url)
{
    $reg = '@^(https?\://)?(www\.)?([a-z0-9]([a-z0-9]|(\-[a-z0-9]))*\.)+[a-z]+$@i';
    if (empty($url)) {
        return true;
    }
    return filter_var($url, FILTER_VALIDATE_URL) && preg_match($reg, $url);
    //return preg_match($reg, $url);
}

// validates email address if given
function validateEmail($email)
{
    if (empty($email)) {
        return true;
    }
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// validates mailing list if given
function validateM_list($email)
{
    if (!empty(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        return true;
    }
    return false;
}

// validates How we met
function validateMet($met)
{
    $validMeet = array("meetup", "jobfair", "notmet", "Other");
    return in_array($met, $validMeet);
}

// Email Method
function validMethod($method){
    return $method == 'HTML' || $method == 'Text';
}
