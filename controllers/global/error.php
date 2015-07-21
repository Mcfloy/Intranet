<?php
	require_once 'controllers/global/header.php';
?>
	<div class="container">
		<?php
			function getErrorName($id)
			{
				if ($id == 404)
					return "<strong>Erreur 404</strong> : La page n'existe pas ou plus.";
				else
					return "Cette erreur n'est pas repertoriée. Id de l'erreur : " . $id;
			}

			if (!isset($idError))
				header('location: /Intranet/');
			else
				$errorName = getErrorName(intval($idError));

			require_once 'views/global/error.php';
		?>
	</div>
<?php
	require_once 'views/global/footer.php';
?>