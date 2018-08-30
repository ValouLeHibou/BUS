<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Brain Up School est une startup ayant pour but de créer une plateforme de cours en ligne dans le domaine de l'informatique et du numérique.">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<title>Brain Up School - Cours en ligne 3.0</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
 	 rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bus_v2.css">
	<link rel="icon" type="image/png" href="image/logo/favicon2.png" />
</head>
<body>

	<?php include("include/mobile_nav.inc.php"); ?>

	<header id="header_home">
		<?php include("include/nav.inc.php"); ?>

		<div>
			<h1>Step up your level</h1>

			<span>Brain up School est un projet visant la diffusion de la <a href="valeurs_brain_up_school.php" class="keyword">culture numérique</a> et informatique grâce à des <a href="pedagogie_brain_up_school.php" class="keyword">cours en ligne.</a></span>

			<a href="#home_concept">Découvrir Brain Up School</a>
		</div>
	</header>

	<main id="home">
		<section id="home_actu">
				<div class="row">
					<h2>Actualités</h2>
				</div>

				<div class="row">
					<div class="col l4 m6 s12">
						<a href="actualite.php">
							Notre levée de fonds
						</a>
					</div>

					<div class="col l4 m6 s12">
						<a href="actualite.php">
							Brain Up School recrute !
						</a>
					</div>

					<div class="col l4 m6 s12">
						<a href="actualite.php">
							Notre dernière newsletter
						</a>
					</div>
				</div>

				<?php include("include/clicktoaction.inc.php"); ?>
		</section>

		<!-- Nos valeurs -->
		<section id="home_valeurs">
			<div class="row">
				<h2>Nos valeurs</h2>
			</div>

			<div class="row">
				<div class="col l3 m6 s12">
					<h3>La passion</h3>
					<img src="image/passion.png" alt="Passion" title="Passion">
					<p>Notre valeur principale : Sans la passion, rien ne se crée !</p>
				</div>

				<div class="col l3 m6 s12">
					<h3>L'engagement</h3>
					<img src="image/engagement.png" alt="engagement" title="Engagement">
					<p>L'engagement, moteur de la réalisation de nos projets.</p>
				</div>

				<div class="col l3 m6 s12">
					<h3>L'innovation</h3>
					<img src="image/innovation.png" alt="innovation" title="Innovation">
					<p>L'innovation se retrouve au centre de tous nos projets.</p>
				</div>

				<div class="col l3 m6 s12">
					<h3>La collaboration</h3>
					<img src="image/collaboration.png" alt="Collaboration" title="Collaboration">
					<p>La collaboration, indispensable au fonctionnement de notre structure.</p>
				</div>
			</div>

			<div class="row">
				<!-- Lien vers qui somme nous ? -->
				<a href="valeurs_brain_up_school.php">En savoir plus sur nos valeurs</a>
			</div>
		</section>

		<!-- Concept de BUS -->
		<section id="home_concept">
			<div class="row">
				<h2>Le concept de Brain Up School</h2>
			</div>

			<div class="row">
				<div class="col l6 m12 s12">
					<div class="concept_entete">
						<h3>L'apprentissage interactif</h3>
					</div>
					<div>
						<img src="image/cours_ligne.jpg" alt="cours en ligne" title="Les cours en ligne">
					</div>
					<div>
						<p>La force de Brain Up School est la possibilité pour les utilisateurs de suivre des cours via FaceTime.</p>
					</div>
				</div>

				<div class="col l6 m12 s12">
					<div class="concept_entete">
						<h3>L'apprentissage personnel</h3>
					</div>
					<div>
						<img src="image/classe_inversee.jpg" alt="apprentissage personnel" title="Apprentissage personnel">
					</div>
					<div>
						<p>Brain Up School favorise l'expérience et l'apprentissage personnels.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<a href="pedagogie_brain_up_school.php">En savoir plus sur notre concept</a>
			</div>
		</section>

		<!-- CODE V1 SECTION OBJECTIF 
		<section>
			<div>
				<div>
					<h3>S'associer</h3>
					<p>Avec des entreprises, universités, écoles, pour remplir une mission commune : l'éducation.</p>
				</div>

				<div>
					<h3>Accompagner</h3>
					<p>Nos étudiants mais aussi nos professeurs, et encourager leurs projets.</p>
				</div>
			</div>

			<div>
				<img src="image/info/info_objectif.png">
			</div>

			<div>
				<div>
					<h3>Former</h3>
					<p>Aux dernières technologies. Car la vie est un apprentissage permanent.</p>
				</div>

				<div>
				<h3>Innover</h3>
					<p>En cherchant constamment de nouvelles méthodes d'enseignement.</p>
				</div>
			</div>
		</section>
		-->
		<section id="objectifs">
			<div class="row">
				<h2>Nos objectifs</h2>
			</div>

			<div class="row">
				<div class="col l4 m4 s12">
					<div>
						<h3 id="obj1">S'associer</h3>
						<p>Avec des entreprises, universités, écoles, pour remplir une mission commune : l'éducation.</p>
					</div>

					<div>
						<h3 id="obj2">Accompagner</h3>
						<p>Nos étudiants mais aussi nos professeurs, et encourager leurs projets.</p>
					</div>
				</div>

				<div class="col l4 m4 s12" id="info_obj">
					<img src="image/info/info_objectif.png" alt="objectifs" title="objectifs">
				</div>

				<div class="col l4 m4 s12">
					<div>
						<h3 id="obj3">Former</h3>
						<p>Aux dernières technologies. Car la vie est un apprentissage permanent.</p>
					</div>
					<div>
						<h3 id="obj4">Innover</h3>
						<p>En cherchant constamment de nouvelles méthodes d'enseignement.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Partenaires -->
		<section id="partenaires">
			<div class="row">
				<h2>Ils sont déjà partenaires !</h2>
			</div>

			<div class="row">
				<div class="col l3 m6 s12 logo_partenaire">
					<img src="image/logo-eemi.png" alt="EEMI" title="Ecole Europeenne des Metiers de l'Internet">
				</div>

				<div class="col l3 m6 s12 logo_partenaire">
					<img src="image/epitech.png" alt="epitech" title="Epitech">
				</div>

				<div class="col l3 m6 s12 logo_partenaire">
					<img src="image/sorbonne.jpg" alt="Sorbonne" title="Paris 1 Sorbonne">
				</div>

				<div class="col l3 m6 s12 logo_partenaire">
					<img src="image/bordeaux.png" alt="Université de Bordeaux" title="Université de Bordeaux">
				</div>
			</div>
			</section>


			<!-- FORMULAIRE -->
			<section id="formulaire">
				<div class="row">
					<h2>Contactez nous !</h2>
				</div>

				<div class="row">
				
					<div class="col l6 m12 s12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.426291724282!2d2.3392181156796172!3d48.86914947928855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c8ab00dff%3A0xc8bb3a66d8ae2daa!2s28+Place+de+la+Bourse%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1477227367971"  frameborder="0" allowfullscreen></iframe>
						<p>Nous retrouver</p>
					</div>

					<div class="col l6 m12 s12">
						<form method="post" action="#">
								<input type="text" name="prénom" placeholder="> Prénom" required/>
								<input type="text" name="nom" placeholder="> Nom" required />
								<input type="email" name="email" placeholder="> Adresse mail" required/>
								<textarea id="message" name="message" placeholder="> Message" required></textarea>

								<div>
									<span>Souhaitez vous recevoir notre newsletter ?</span>
									<input type="radio" name="newsletter">Oui
									<input type="radio" name="newsletter" checked>Non
								</div>

								<input type="submit" value="Envoyer">
						</form>
					</div>
				</div>

			</section>
	</main>

	<?php include("include/footer.inc.php"); ?>

	<script src="bus_v2.js"></script>
</body>
</html>