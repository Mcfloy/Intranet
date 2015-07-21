<?php
	require_once 'controllers/global/header.php';
?>
	<div class="container">
		<?php
			if (isset($_SESSION['member']))
				{
					if ($_SESSION['member']->isTeacher() == false) {
						$h4  = "<h4>Emploi du temps des <strong>";
						$h4 .= $_SESSION['member']->getClass();
						if (!empty($_SESSION['member']->getGroup()))
							$h4 .= "</strong>, groupe <strong>" . $_SESSION['member']->getGroup();
						$h4 .= "</strong></h4>";
					}
					else {
						$h4 .= "<h4>Emploi du temps de <strong>" . $_SESSION['member']->getFullname() . "</strong></h4>";
					}

					$mySchedule = $_SESSION['member']->getSchedule();
					
					require_once 'views/schedule/schedule.php';
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