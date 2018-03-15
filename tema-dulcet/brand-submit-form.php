<?php
$submission_id = $_POST['brand-submission_id'];
$name = $_POST['brand-name-field'];
$surname = $_POST['brand-name-field'];
$email = $_POST['brand-email-field'];
$subject = $_POST['brand-subject-field'];
$message = $_POST['brand-message-field'];

$params = array([$submission_id, $name, $surname, $email, $subject, $message]);

function ExtendedAddslash(&$params)
{
    foreach ($params as &$var) {
        // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
        is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        unset($var);
    }
}

// Initialize ExtendedAddslash() function for every $_POST variable
ExtendedAddslash($_POST);

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'brand-ddbb';

mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name);

// search submission ID

$query = "SELECT * FROM `brand-data` WHERE `submission_id` = '$submission_id'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {

    mysql_query("UPDATE `brand-data` SET 
                                `name` = '$name',
                                `surname` = '$surname',
                                `email` = '$email',
                                `subject` = '$subject',
                                `message` = '$message'        
                             WHERE `submission_id` = '$submission_id'")
    or die(mysql_error());

} else {

    mysql_query("INSERT INTO `brand-data` (submission_id, name, surname, email, subject, message) 
                               VALUES ('$submission_id', '$name', '$surname', '$email', '$subject', '$message') ")
    or die(mysql_error());

}
?>