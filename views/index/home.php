<ul class="breadcrumb">
	<!-- Remplacement URL -->
	<li><a href="/Intranet">Intranet</a></li>
	<li class="active">Accueil</li>
</ul>

<h3><?php echo $today; ?></h3>
<div class="row">
	<div class="col-lg-4 col-sm-6">
		<div class="row-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Vos cours de la journée</h3>
				</div>
				<div class="panel-body">
					<?php
						if ($mySchedule == false)
						{
							echo "<p>Pas de cours pour aujourd'hui.</p>";
						}
						else
						{
							?>
							<table class="table table-bordered table-condensed">
								<thead>
									<tr>
										<th>Horaire</th>
										<th>Cours</th>
										<th>Salle</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$horairesDebut = ["08h10","09h10","10h20","11h20","12h15","12h40","13h35","14h35","15h45","16h45"];
								$horairesFin = ["09h05","10h05","11h15","12h15", "12h40", "13h30","14h30","15h30","16h40","17h40"];
								$i = 0;
								foreach ($mySchedule as $session)
								{
									if ($session->{"lesson"} == true)
									{
										if ($session->{"alternative"} == true)
										{
											echo "<tr>";
											if ($session->{"title2"} == "")
												echo "<td>" . $horairesDebut[$i] . " - " . $horairesFin[$i + ($session->{"length"} - 1)] . "</td><td>" . $session->{"title1"} . "</td><td>" . $session->{"salle1"} . "</td>";
											else
												echo "<td>" . $horairesDebut[$i] . " - " . $horairesFin[$i + ($session->{"length"} - 1)] . "</td><td>" . $session->{"title1"} . " - " . $session->{"title2"} . "</td><td>" . $session->{"salle1"} . " - " . $session->{"salle2"} . "</td>";
											echo "</tr>";
										}
										else
										{
											echo "<tr>
													<td>" . $horairesDebut[$i] . " - " . $horairesFin[$i] . "</td><td>" . $session->{"title"} . "</td><td>" . $session->{"salle"} . "</td>
												  </tr>";
										}
										$i += $session->{"length"};
									}
								}
								?>
								</tbody>
							</table>
							<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-sm-6">
		<div class="row-fluid">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Vos absences</h3>
				</div>
				<div class="panel-body">
					<p>Vous n'avez pas d'absence, continuez comme ça ! &#9786;</p>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Repas du jour</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
						<li>
							<strong>Entrées</strong>
							<ul>
								<li>Pizza</li>
							</ul>
						</li>
						<li>
							<strong>Plat du jour</strong>
							<ul>
								<li>Pizza</li>
							</ul>
						</li>
						<li>
							<strong>Dessert</strong>
							<ul>
								<li>Pizza</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-sm-6">
		<div class="row-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Annonces de la semaine</h3>
				</div>
				<div class="panel-body">
					<dl>
						<dt><a href="#">Lorem ipsum dolor sit amet</a></dt>
						<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</dd>
						<dt><a href="#">Lorem ipsum dolor sit amet</a></dt>
						<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</dd>
						<dt><a href="#">Lorem ipsum dolor sit amet</a></dt>
						<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</dd>
						<dt><a href="#">Lorem ipsum dolor sit amet</a></dt>
						<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</dd>
					</dl>
					<a href="#" class="btn btn-link btn-lg btn-block">Voir toutes les annonces</a>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="/Intranet/resources/css/index.css" />