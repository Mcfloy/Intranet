<?php
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=intranet", "root", "");
	} catch (Exception $e) {
		die('Error: ' . $e->getMessage());
	}
?>