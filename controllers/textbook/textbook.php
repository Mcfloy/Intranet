<?php
	require_once 'controllers/global/header.php';
?>
	<div class="container">
		<?php
		if (isset($_SESSION['member']))
		{
			require_once 'modeles/textbook/textbook.php';

			$textbook = new textbook($_SESSION['member']->getClass(), date('W'), date('Y'));
			var_dump($textbook);
			require_once 'views/textbook/textbook.php';
		}
		else
		{
			require_once 'views/global/guest.php';
		}
		?>
	</div>
<?php
	require_once 'views/global/footer.php';
?>