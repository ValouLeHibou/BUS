<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Back Office</title>
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

		<main id="main_log">
			<section>
				<div class="row">
					<h1>Back Office</h1>
				</div>
			</section>

			<section>
				<h2>Bienvenue dans le back office</h2>
				
				<form method="get" action="verif.php">
					<fieldset>
					<legend>Connexion administrateur</legend>
							<div class="row">
								<div class="col l6 m6 s12 log">
									<label for="login">Login</label>
									<label for="pass">Password</label>
								</div>

								<div class="col l6 m6 s12">
									<input type="text" name="login" id="login" placeholder="Vos identifiants" required>
									<input type="password" name="pass" id="pass" placeholder="Votre mot de passe" required>
								</div>
							</div>

							<div class="row">
								<input type="submit" name="post" value="Connexion">
							</div>
					</fieldset>
				</form>

				<?php
				 if(isset($_GET["notif"])){
				 	if($_GET["notif"] == "nok"){
				 		echo "<span class='error_msg'>Erreur : Identifiant ou mot de passe invalide(s).</span>";
				 	}
				 }
				?>
			</section>
		</main>

		<?php include("include/footer.inc.php"); ?>
		<script src="bus_v2.js"></script>
</body>
</html>