<?php

session_start();

function loadClass($class) {
	if (file_exists(__DIR__."/".$class.".php")) {
		require_once __DIR__."/".$class.".php";
	}
}
spl_autoload_register("loadClass");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Billet simple pour l'Alaska</title>
	<meta name="description" content="Découvrez le dernier roman de Jean Forteroche, Billet simple pour l'Alaska. Roman uniquement disponible en ligne avec publication périodique.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
	<div class="hidden">
		<nav>
			<ul>
				<li><a href="index.php?menu=news">Accueil</a></li>
				<li><a href="index.php?menu=archives">Archives</a></li>
				<?php
					if(isset($_SESSION['identifiant'])){
						echo "<li>".$_SESSION['identifiant']['identifiant']."</li>";
					}
					else{
						echo '<li><a href="index.php?menu=login">Login</a>';
					}
				?>
			</ul>
		</nav>
	</div>
	<header>
		<i class="fa fa-bars"></i>
		<hgroup>
			<h1>Billet simple pour l'Alaska</h1>
			<h2>Jean Forteroche</h2>
		</hgroup>
		<nav>
			<ul>
				<li><a href="index.php?menu=news">Accueil</a></li>
				<li><a href="index.php?menu=archives">Archives</a></li>
				<?php
					if(isset($_SESSION['identifiant'])){
						echo "<li><a href='index.php?menu=adminAuteur'>".$_SESSION['identifiant']['identifiant']."</a></li>";
					}
					else{
						echo '<li><a href="index.php?menu=login">Login</a>';
					}
				?>
				
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<?php
				if(isset($_GET["menu"])){
					switch($_GET["menu"]){
					case 'archives': include('archives.php');
					break;
					case 'login': include('login.php');
					break;
					case 'inscription': include('inscription.php');
					break;
					case 'adminAuteur': include('adminAuteur.php');
					break;
					default: include('news.php');
					break;
					}
				}
				else{
					include('news.php');
				}
			?>
		</section>
	</main>
	<script src="https://use.fontawesome.com/e192cafa35.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="js/hamburger.js"></script>
</body>
</html>