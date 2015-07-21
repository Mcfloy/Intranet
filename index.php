<?php
	require_once __DIR__ . "/modeles/global/AltoRouter.php";

	$router = new AltoRouter();
	$router->setBasePath('/Intranet/');

	$router->map('GET', '', function() {
		require_once __DIR__ . '/controllers/index/index.php';
	}, 'index');

	$router->map('GET', 'schedule', function() {
		require_once __DIR__ . '/controllers/schedule/schedule.php';
	}, 'schedule');

	$router->map('GET', 'textbook', function() {
		require_once __DIR__ . '/controllers/textbook/textbook.php';
	}, 'textbook');

	$router->map('GET', 'marks', function() {
		require_once __DIR__ . '/controllers/marks/marks.php';
	}, 'marks');

	$router->map('GET', 'settings', function() {
		require_once __DIR__ . '/controllers/settings/settings.php';
	}, 'settings');


	$match = $router->match();

	if ($match && is_callable($match['target'])) {
		call_user_func_array($match['target'], $match['params']); 
	} else {
		$idError = 404;
		require_once __DIR__ . '/controllers/global/error.php';
	}
?>