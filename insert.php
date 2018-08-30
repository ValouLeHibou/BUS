<?php include("include/config.inc.php"); ?>
<?php include("include/pdo.inc.php"); ?>

<?php
	session_start();
	ini_set('display_errors', 1);
		/*try{*/
		$titre = $_POST["titre"];
		$cat = $_POST["cat"];
		$contenu = $_POST["contenu"];
		$auteur = $_POST["auteur"];
		$img =$_POST["image"];

			$query = 'INSERT INTO 
							projet1a_posts(post_id, post_date, post_title, post_content, post_author, post_category, post_img) VALUES ("", NOW() , "'.addslashes($titre).'", "'.addslashes($contenu).'", "'.$auteur.'", "'.$cat.'", "'.$img.'")';

			$req = $pdo->exec($query);

			header("Location:actualite.php?notif=ok");
		/*}
		catch(Exception $e){
			header("Location:back_article.php?notif=nok");
		}*/

