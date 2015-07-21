<?php
	require_once 'modeles/global/member.php';
	session_start();
	
	function getTitle() {
		$prefixe = "Intranet du Lycée Malraux";
		$url = basename($_SERVER['SCRIPT_NAME'], ".php");
		if ($url == "index")
			return $prefixe . " - Acceuil";
		else if ($url == "schedule")
			return $prefixe . " - Emploi du temps";
		else if ($url == "settings")
			return $prefixe . " - Paramètres";
		else if ($url == "textbook")
			return $prefixe . " - Cahier de texte";
		else if ($url == "marks")
			return $prefixe . " - Mes notes";
		else
			return $prefixe . " - " . $url;
	}

	require_once 'views/global/header.php';
?>