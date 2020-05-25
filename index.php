<?php
$file = fopen('compteur.txt', 'r+');
$ancien = fgets($file);
$new = $ancien+1;
fseek($file, 0);
fputs($file, "$new");
fclose($file);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>BIG TREE-Accueil</title>
	<link rel="stylesheet" type="text/css" href="structure.css">
	<meta charset="utf-8">
</head>
<body>
	<HEADER> <h1><a href="#"> Sen BigTree</a></h1>
	</HEADER>
	<?php include 'menu.php';?>
	</div><br>
	<h1 style="padding-left: 50px">Presentation de BIG TREE <br></h1>
	<div id="content">
		<div class="leftbox">

<h2 style="font-family:calibri;"> Pourquoi BIG TREE ? </h2>

<p>Ce monde est dominé par la technologie, par les nouvelles techniques qui font irruption chaque jour qui passe. Il est difficile de croire que chaque jour, il y a un nouveau truc qui sort. C'est donc très dur de se mettre au diapason comme on dit. Bien sûr il existe plusieurs sites d'informations sur le MONDE HIGH TECH. Des sites qui vous offrent la possibilité de prendre connaissance des derniers applis, logiciels, appareils qui ont vu le jour récemment.</p> <br>

<p>Cependant la majeure partie de ces sites sont administrés par des personnes dont l'unique but est de faire connaitre les produits de leurs partenaires. Ils n'ont pas besoin de traverser l'Atlantique ou la Méditerranée pour voir de nouvelles choses intéressantes. Pourtant il y a des choses intéressantes dans ces pays. Alors au lieu d'attendre l'aide des autres pour nous faire connaitre pourquoi ne pas se faire connaitre soi-même ? Se faire connaitre localement serait, à notre humble avis, beaucoup plus important. Il faut que les gens sachent ce qui se fait autour d'eux. Il faut qu'ils soient au courant de la dernière appli développée par un sénégalais, par exemple. Nous avons un outil très puissant pour faire passer l'information: INTERNET.</p><br>

<h2>Comment fonctionne BIG TREE ? </h2>

<p>Le principe de fonctionnement de BIG TREE  est très simple. Ce site internet est son atout principal. Il y aura des rubriques pour chaque domaine.<br>
En ce qui concerne le contenu, il y aura une sorte de présentation du produit dans laquelle se trouveront comme informations : l’entreprise qui l'a créé, le nom, la date de sortie, le fonctionnement du produit et sa fiche technique.
En ce qui concerne la gestion du site, il y a deux approches : <br>
==><strong>Le système Link</strong><br>
Ce système intervient que si le produit a déjà un site internet. C'est à dire que nous allons juste faire une présentation très bréve qui va se terminer sur un lien qui redirige vers la page officiel du propriétaire.<br>
==><strong>Le système Trust</strong> <br>
Il s'agit du cas où le propriétaire du produit n'a pas de site internet. Il va tout simplement nous envoyer toutes les informations sur son produit. Il aura donc l'opportunité de faire la présentation de son produit gratuitement sans posséder de site internet. Il aura même le choix du nombre de page. Tout dépend de la pertinence de son produit!</p><br>


<p>Nous parlons beaucoup de produits mais les annonces peuvent de différentes natures. Elles vont du dernier Startup qui s'intéresse à tout ce qui touche le High Tech jusqu'à la dernière application qui a récemment vu le jour, tout en restant quand même dans le domaine **LOCAL**. Il va donc falloir que les développeurs s'activent. Qui sait? Peut-être que ce sera une source de motivation en plus!</p><br>

<p>Mais avant tout cela nous devons d'abord nous faire connaitre et la visite de notre site par les utilisateurs devra être quotidienne pour que ce qu'on est en train de faire ait au moins un sens.
Il va donc falloir :<br>
==>Tisser des connaissances;<br>
==>Recueillir le maximum d'utilisateurs;<br>
==>Améliorer en permanence le site et le contenu pour une meilleure expérience.</p><br>

<h2>Quelles sont les perspectives de BIG TREE ?</h2>

<p>Développer une appli BIG TREE serait aussi très utile. Cette appli génèrera des notifications à chaque nouvelle annonce. Ainsi l'utilisateur pourra s'informer en temps et en heure.<br>
Le succès de ce projet se manifestera selon nous, par au moins milles visiteurs par jour.</p><br>
		</div>
		<div class="rightbox">
			<div class="image">
				<h3>Une Vision ambitieuse</h3>
				<img src="images/vision.jpg" width="85%">
			</div>
			<div class="image">
				<h3>De la Créativité</h3>
				<img src="images/creativite.jpg" width="85%">
			</div>
			<div class="image">
				<h3>L'intelligence</h3>
				<img src="images/nice.jpg" width="85%">
			</div>
			
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>