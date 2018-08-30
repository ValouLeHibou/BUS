<?php
	session_start();
	
	if($_GET["action"] == "logout")
	{
		session_unset();
	}
	$login = $_SESSION["admin"];
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<title>Actualités</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="bus_v2.css">
		<link rel="icon" type="image/png" href="image/logo/favicon2.png" />
	</head>

	<body>
		<?php include("include/config.inc.php"); ?>
		<?php include("include/pdo.inc.php"); ?>
		<?php include("include/mobile_nav.inc.php"); ?>

		<?php
			//REQUÊTE SQL
			try{
				$query = "SELECT post_id, post_date, post_title, post_content, post_author, post_category, post_img, user_email, display_name, cat_descr
					FROM projet1a_categories, projet1a_posts, projet1a_users
					WHERE user_id=post_author
					AND post_category=cat_id";
			} 
			catch(Exception $e){
				die("Erreur MySQL : ".$e->getMessage());
			}

			//ENVOI DE LA REQUÊTE
			$req = $pdo->query($query);

			$data = $req->fetchAll();
		?>

		<header id="header_actu">
			<?php include("include/nav.inc.php"); ?>
		</header>

		<main id="main_actu">
			<section>
				<div class="row">
					<h1>Articles et actualités</h1>
				</div>
		
				<!-- EMPLACEMENT DE LA BOUCLE PHP -->
				<?php
				foreach($data as $onedata){
				?>
					<div class="row article_header">
						<div class="col l4 m4 s12">
							<h3><?= $onedata["post_date"] ?></h3>
						</div>

						<div class="col l4 m4 s12">
							<h3><?= $onedata["post_title"] ?></h3>
						</div>

						<div class="col l4 m4 s12">
							<span><?= $onedata["cat_descr"] ?></span>
						</div>
					</div>

					<div class="row article_content hidden">
						<div class="col l6 m6 s12">
							<p><?= $onedata["post_content"] ?></p>
							<p><?= $onedata["display_name"] ?></p>
						</div>

						<div class="col l6 m6 s12">
							<img src="<?= $onedata["post_img"] ?>" alt="description">
						</div>
					</div>
				<?php
				}
				//Terminer la requête en fermant le curseur
				$req->closeCursor();
				?>

				<?php include("include/clicktoaction.inc.php"); ?>
			</section>
		</main>

		<?php include("include/footer.inc.php"); ?>
		<script src="bus_v2.js"></script>
	</body>
</html>