<?php include("include/config.inc.php"); ?>
<?php include("include/pdo.inc.php"); ?>

<?php
	session_start();

	if($_GET["action"] == "logout")
	{
		session_unset();
	}

	if (!isset($_SESSION['admin'])) {
		//echo $_SESSION['admin'];
		header("Location:back.php");
	}
	
	$login = $_SESSION["admin"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Back Office Article</title>
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

		<header>
			<?php include("include/nav.inc.php"); ?>
		</header>

		<main id="main_art">
			<section>
				<div class="row">
					<h1>Back office articles</h1>
				</div>

				<?php
					echo "Bonjour " . $_GET["user"];
				?>
			</section>

			<section>
				<form method="post" action="insert.php">
					<fieldset>
					<legend>Créer un article</legend>
						<div class="row">
							<div class="col l6 m6 s12">
								<label for="titre">Titre de l'article</label>
								<label for="cat">Catégorie</label>
								<label for="contenu">Texte de l'article</label>
								<label for="auteur">Auteur</label>
								<label for="image">Image</label>
							</div>

							<div class="col l6 m6 s12">
								<input type="text" name="titre" id="titre" placeholder="Le titre de l'article" required>
								<select name="cat" id="cat">
									<option disabled selected>Catégorie</option>
									<option value="10">Levée de fonds</option>
									<option value="11">Recrutement</option>
									<option value="12">Partenaires</option>
									<option value="13">Nouveaux cours</option>
								</select>
								<textarea placeholder="Texte de l'article" name="contenu" id="contenu"></textarea>
								<select name="auteur" id="auteur">
									<option disabled selected>Auteur</option>
									<option value="1">Jacques</option>
									<option value="2">Johanne</option>
									<option value="3">Valentin</option>
									<option value="4">Loa</option>
								</select>
								<input type="text" name="image" id="image" placeholder="Saisissez l'URL de l'image">
							</div>
						</div>

						<div class="row">
							<input type="submit" name="post" value="Publier">
						</div>
					</fieldset>
				</form>
				</div>
			</section>
		</main>

		<?php include("include/footer.inc.php"); ?>
		<script src="bus_v2.js"></script>
</body>
</html>