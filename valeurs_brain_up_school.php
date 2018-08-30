<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Les valeurs de B.U.S</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bus_v2.css">
	<link rel="icon" type="image/png" href="image/logo/favicon2.png" />
</head>
<body>
	<?php include("include/mobile_nav.inc.php"); ?>

	<header id="header_valeurs">
		<?php include("include/nav.inc.php"); ?>
	</header>

	<main id="main_valeurs">
		<section>
			<div class=row>
				<h1>Nos valeurs</h1>
			</div>

			<div class="row" id="info_valeurs">
				<img src="image/info/info_valeurs.png" alt="Nos valeurs" title="Nos valeurs">
			</div>

			<div class="row">
				<div class="col l3 m6 s12">
					<h3 id="v1">La passion</h3>
					<p>Notre valeur principale : C'est d'elle qu'est née Brain Up School. C'est à la fois ce qui nous pousse à imaginer sans cesse de nouveaux projets, et ce qui nous donne l'énergie de les réaliser. La passion est ce qui permet de repousser les limites, jusqu'à réussir ce qui semblait impossible.</p>
				</div>

				<div class="col l3 m6 s12">
					<h3 id="v2">L'innovation</h3> 
					<p>Une valeur qui nous tient à coeur. Il s'agit non seulement de l'engagh3ent dont nous faisons preuves envers nos partenaires, mais aussi entre nous, au sein de l'équipe Brain Up School. Il est le moteur de la conception et de la réalisation de nos projets.</p>
				</div>	

				<div class="col l3 m6 s12">
					<h3 id="v3">L'engagement</h3>
					<p>C'est l'objectif que nous poursuivons : nous souhaitons faire de Brain Up School une plateforme dynamique, qui connaitra de nombreuses évolutions. L'innovation est la clef de voute de notre projet.</p>
				</div>

				<div class="col l3 m6 s12">
					<h3 id="v4">La collaboration</h3> 
					<p>Une valeur importante pour chaque entreprise. Travailler en équipe est le meilleur moyen de stimuler la créativité de chacun, et de laisser les talents s'exprimer. Chacun est à sa place chez Brain Up School, et notre culture d'entreprise est basée sur cet esprit collaboratif.</p>
				</div>
			</div>

			<?php include("include/clicktoaction.inc.php"); ?>
		</section>
	</main>
	<?php include("include/footer.inc.php") ?>

	<script src="bus_v2.js"></script>
</body>
</html>