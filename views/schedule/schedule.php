<ul class="breadcrumb">
	<!-- Remplacement URL -->
	<li><a href="/Intranet">Intranet</a></li>
	<li class="active">Emploi du temps</li>
</ul>

<div class="row">
	<div class="col-lg-12">
		<?php
			echo $h4;
		?>
		<table class="table table-condensed table-bordered hidden-xs hidden-sm">
			<thead>
				<tr>
					<th>Heures</th>
					<th>8h10 - 9h05</th>
					<th>9h10 - 10h05</th>
					<th>10h20 - 11h15</th>
					<th>11h20 - 12h15</th>
					<th>12h15 - 12h40</th>
					<th>12h40 - 13h35</th>
					<th>13h35 - 14h30</th>
					<th>14h35 - 15h30</th>
					<th>15h45 - 16h40</th>
					<th>16h45 - 17h40</th>
				</tr>
			</thead>
			<tbody>

			<?php
			$i = 0;
			foreach ($mySchedule as $k => $day) {
				$i++;
				$doubleRows = false;
				$doubleRowsArray = array();
				foreach ($day as $session) {
					if (isset($session->{"alternative"}) && $session->{'alternative'} == true) {
						$doubleRows = true;
						array_push($doubleRowsArray, array("length" => $session->{"length"}, "lesson" => $session->{"lesson"}, "title" => $session->{"title2"}, "salle" => $session->{"salle2"}));
					}
				}

				if ($doubleRows == false) {
					echo '
						<tr class="tr' . (($i % 2) + 1) . '">
							<td>' . $k . '</td>
					';

					foreach ($mySchedule->{$k} as $d) {
						if ($d->{"lesson"} == true) {
							echo '
								<td colspan="' . $d->{"length"} . '">' . $d->{"title"} . '<br><span class="label label-primary">Salle ' . $d->{"salle"} . '</span></td>
							';
						}
						else {
							echo '
								<td colspan="' . $d->{"length"} . '"></td>
							';
						}
					}

					echo '
						</tr>
					';
				}
				else {
					echo '
						<tr class="tr' . (($i % 2) + 1) . '">
							<td rowspan="2">' . $k . '</td>
					';

					foreach ($mySchedule->{$k} as $d) {
						if ($d->{"lesson"} == true) {
							if ($d->{"alternative"} == false) {
								echo '
									<td colspan="' . $d->{"length"} . '" rowspan="2">' . $d->{"title"} . '<br><span class="label label-primary">Salle ' . $d->{"salle"} . '</span></td>
								';
							}
							else
							{
								echo '
									<td colspan="' . $d->{"length"} . '" rowspan="1">' . $d->{"title1"} . '<br><span class="label label-primary">Salle ' . $d->{"salle1"} . '</span></td>
								';
							}
						}
						else {
							echo '
								<td colspan="' . $d->{"length"} . '" rowspan="2"></td>
							';
						}
					}

					echo '
						</tr>
						<tr class="tr' . (($i % 2) + 1) . '">
					';

					foreach ($doubleRowsArray as $d) {
						echo '
							<td colspan="' . $d["length"] . '" rowspan="1">' . $d["title"] . '<br>
						';
						if ($d["salle"] != "") {
							echo '<span class="label label-primary">Salle ' . $d["salle"] . '</span>';
						}
						echo '
							</td>
						';
					}

					echo '
						</tr>
					';
				}
			}
			?>
			</tbody>
		</table>
		<div class="visible-xs visible-sm">
			<div class="alert alert-dismissible alert-danger">
				Votre écran est trop petit pour afficher l'emploi du temps.
			</div>
		</div>
		<style type="text/css">
			.table thead tr th:first-child {
				width: 6.5%;
			}

			.table thead tr th:not(:first-child) {
				width: 9%;
			}

			.table, .table th, .table tr, .table td {
				text-align: center;
				vertical-align: middle !important;
				border-collapse: separate;
				border-color: #ddd !important;
			}
			
			.table {
				border-top-width: 3px;
				border-radius: 4px;
			}

			.tr1 {
				background-color: #f5f5f5;
			}
		</style>
	</div>
</div>
