<?php
	include_once('database/connection.php'); 
	include_once('database/events.php');

	try {
	$posts = getAllUsers($dbh);
	} catch (PDOException $e) {
	die($e->getMessage());
	}
  
	include ('templates/header.php');
	include ('templates/main_page.php');
	include ('templates/footer.php');
?>
