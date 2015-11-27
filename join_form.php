<?php

if (!isset($_POST['username'])) die('No user name');
if (!isset($_POST['emailaddress'])) die('No e-mail address');
if (!isset($_POST['password'])) die('No password');
if (!isset($_POST['day'])) die('No day dob');
if (!isset($_POST['month'])) die('No month dob');
if (!isset($_POST['year'])) die('No year dob');
if (!isset($_POST['gender'])) die('No gender');
$dob = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];

include_once('database/connection.php'); 
include_once('database/events.php');

try {
insertNewUser($dbh, $_POST['username'], $_POST['emailaddress'], $_POST['password'], $dob, $_POST['gender']);
} catch (PDOException $e) {
die($e->getMessage());
}

header('Location: user_page.php');
	
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
