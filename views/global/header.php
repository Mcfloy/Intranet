<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="resources/js/jquery.min.js"></script>
	<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="resources/js/global.js"></script>
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="resources/css/style.css" />-->
	<link rel="icon" href="favicon.ico" />
	<meta name="charset" content="utf-8"/>
	<title><?php echo getTitle(); ?></title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navArea">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Remplacement URL -->
				<a href="/Intranet/" class="navbar-brand"><img src="resources/img/icons/graduation.png" style="max-height:40px;display:inline-block;"/> Intranet</a>
			</div>
			<?php
				if (isset($_SESSION['member']))
				{
				?>
				<div class="collapse navbar-collapse" id="navArea">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php if (isset($_SESSION['member'])) { echo $_SESSION['member']->getLogin(); } ?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<!-- Remplacement URL -->
								<li><a href="/Intranet/schedule"><span class="glyphicon glyphicon-calendar"></span> Emploi du temps</a></li>
								<li><a href="/Intranet/textbook"><span class="glyphicon glyphicon-book"></span> Cahier de texte</a></li>
								<li><a href="/Intranet/schoolwork"><span class="glyphicon glyphicon-education"></span> Mes devoirs <span class="label label-info">3</span></a></li>
								<li><a href="/Intranet/marks"><span class="glyphicon glyphicon-list-alt"></span> Mes notes</a></li>
								<li class="divider"></li>
								<!-- Remplacement URL -->
								<li><a href="/Intranet/settings"><span class="glyphicon glyphicon-cog"></span> Paramètres</a></li>
								<li><a href="javascript:void(0);return false;" onclick="deconnexion()"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<?php
				}
			?>
		</div>
	</nav>