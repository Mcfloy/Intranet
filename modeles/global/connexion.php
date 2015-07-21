<?php
	require_once 'member.php';
	session_start();

	if (isset($_SESSION['member'])) {
		echo '{"Erreur" : "Vous êtes déjà connecté !"}';
	}
	else if (!isset($_POST['login']) || empty($_POST['login'])) {
		echo '{"Erreur" : "Le login n\'existe pas ou est vide."}';
	}
	else if (!isset($_POST['password']) || empty($_POST['password'])) {
		echo '{"Erreur" : "Le mot de passe n\'existe pas ou est vide."}';
	}
	else {
		$login = htmlspecialchars($_POST['login']);
		$password = sha1(htmlspecialchars($_POST['password']));
		$_SESSION['member'] = new member($login, $password);
		if ($_SESSION['member']->initialized()) {
			echo '{"Succes" : "Vous êtes désormais connecté !"}';
		}
		else {
			unset($_SESSION['member']);
			echo '{"Erreur": "Mauvais identifiant et/ou mot de passe."}';
		}
	}
?>