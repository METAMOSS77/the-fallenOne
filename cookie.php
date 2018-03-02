<?php
	if(isset($_GET['do']) && isset($_COOKIE['pseudo']) && $_GET['do'] == "delete") {
		setcookie("pseudo", '', time());
		header('Location:cookie.php');
	}
	
	if(isset($_POST['pseudo'])) {
		if(empty($_POST['pseudo'])) {
			echo"Merci de remplir le champ vide.";
		}
		else {
			$pseudo = htmlspecialchars($_POST['pseudo']);
			setcookie("pseudo", $pseudo, time() + 300);
			header('Location:cookie.php');
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Exercice cookie</title>
	</head>
	<body>
		<?php 
			if(isset($_COOKIE['pseudo'])) { 
				echo "Bienvenue ".$_COOKIE['pseudo']."";
		?>
		<a href="cookie.php?do=delete">Detruire le cookie</a>
		<?php
			} 
			else 
			{ 
		?>
			<form method="post">
				<input type="text" name="pseudo" />
				<input type="submit"/>
			</form>
		<?php } ?>
	</body>
</html>