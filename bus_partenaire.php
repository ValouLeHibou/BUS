<!DOCTYPE html>	
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<title>Partenaire</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="bus_v2.css">
		<link rel="icon" type="image/png" href="image/logo/favicon2.png" />
	</head>

	<body>
	
		<?php include("include/mobile_nav.inc.php"); ?>
	
		<header id="header_partenaire">
			<?php include("include/nav.inc.php"); ?>
		</header>

		<main id="form_partenaire">
			<section>
				<div class=row>
					<h1>Devenez Partenaire</h1>
				</div>
				<div class="row form_text">
					<p>Être partenaire, c'est s'investir dans notre projet prometteur pour nous aider à le réaliser. Notre priorité est de travailler de concert avec les écoles et universités, et entreprises, afin de sensibiliser les étudiants dès aujourd'hui aux enjeux de demain.</p>
				</div>

				<?php include("include/clicktoaction.inc.php"); ?>
				<form method="post" action="validation.php" target="_blank">
					<div class=row>
						<h2>Coordonnées :</h2>
					</div>
					<div class="row">
						
						<div class="col l6 m12 s12" id="select">
							<p>Civilité :</p>
							<div>
								<input type="radio" name="civilité" value="M" required/>
								<label for="M">M</label>

								<input type="radio" name="civilité" value="Mme" required/>
								<label for="Mme">Mme</label>

								<input type="radio" name="civilité" value="Mlle" required/>
								<label for="Mlle">Mlle</label>
							</div>

							<p>Prénom :</p>
							<input type="text" name="prenom" required id="input"/>

							<p>Nom :</p>
							<input type="text" name="nom" required  id="input"/>
						</div>

						<div class="col l6 m12 s12" id="select">
							<p>E-mail :</p>
							<input type="text" name="email" required  id="input"/>
						
							<p>Téléphone :</p>
							<input type="text" name="phone" required  id="input"/>
						
							<p>Me contacter :</p>
							<div>
								<input type="checkbox" name="matin"/>
								<label for="matin">Dans la matinée</label>

								<input type="checkbox" name="midi"/>
								<label for="midi">Le midi</label>
								
								<input type="checkbox" name="apres"/>
								<label for="apres">Dans l'après-midi</label>
							</div>
						</div>
					</div>

					<div class="row">
						<input type="submit" value="Envoyer" id="valider"/>
					</div>
					
				</form>

			</section>
		</main>

		<?php include("include/footer.inc.php"); ?>
		
		<script src="bus_v2.js"></script>
	</body>
</html>