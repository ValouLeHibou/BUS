<?php include("include/config.inc.php"); ?>
<?php include("include/pdo.inc.php"); ?>

<?php

session_start();
	
	ini_set("display_errors", 1);
	$query = "SELECT user_login, user_password
	FROM projet1a_users";
		
	$req = $pdo->query($query);

	$data = $req->fetchAll();

	$session_ok = false; // Sert à déterminer si les infos de connexion sont OK

	foreach($data as $onedata){
		if($_GET["login"] == $onedata["user_login"] && $_GET["pass"] == $onedata["user_password"]){
			$_SESSION["admin"] = true;
			$session_ok = true;	
			header("location:back_article.php?user=" . $onedata["user_login"]);	
		}
	}

	if($session_ok == false){
		session_unset();
		header("location:back.php?notif=nok");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vérification de la session</title>
</head>
<body>

</body>
</html>