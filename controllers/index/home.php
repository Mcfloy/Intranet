<?php
if (isset($_SESSION['member']))
{
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	$today = ucwords(strftime('%A %d %B'));

	$mySchedule = $_SESSION['member']->getTodaySchedule();

	require_once 'views/index/home.php';
}
else
{
	require_once 'views/global/guest.php';
}
?>