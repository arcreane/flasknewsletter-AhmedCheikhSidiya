<?php
 require_once('config/functions.php');
  $categories = getAllCategories();

 $articles = getArticles();
 session_start();
 ?>
<!DOCTYPE html>
	<html lang="fr.FR">
	  <head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>les Rois de France</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
		crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	  </head>
	  <body class="bg-dark">
	  <?php require_once('./mvc/partials/header.php');?>
	  <div class="container bs-docs-container text-light">

        <div class= "text-light">
		<div class="cadre-enfant">
        <div class="cadre-image">
          <img src="img/prise_de_bastille.jpg" />
        </div>
        <h2>La Révolution Française : </h2>
		<p> La Révolution Française
Introduction
Dès l'annonce de l'ouverture des états généraux, le souhait de changer la Nation émanait de tous 
les milieux et on appréhendait avec anxiété ou enthousiasme cet instant. Déjà, un fort élan 
politique parcourait le pays, Louis XVI et Necker étaient inquiets. Qui allait devenir 
le maître de la situation ? Est-ce que l'héritage des Lumières s'exprimera pour 
l'avenir ? Comment les événements allaient-ils se dérouler ? Allait-on changer 
irrémédiablement le cours de la vie des Français ? Ces questions allaient bientôt 
trouver leur sens, très vite le poids des privilèges va provoquer un engrenage 
révolutionnaire qui ne s'achèvera que dix ans plus tard.

Les grands événements
Le tiers se déclare « Assemblée nationale »
Les États Généraux furent ouverts solennellement le 5 mai 1789, 
très vite une discussion acharnée éclata sur la façon 
de voter : « par tête », une voix pour chaque homme, ou 
« par ordre », une seule voix pour chacun des trois états 
comme le voulait la tradition. Sous l'impulsion de Mirabeau, 
les députés du tiers état refusèrent de vérifier leur pouvoir 
afin d'éviter à tout prix le vote « par ordre ». Ils espéraient 
ainsi gagner du temps, les différentes tentatives pour débloquer 
la situation s'étaient révélées inutiles. Conscients de représenter 
la majorité des Français, les délégués populaires du tiers se retirent 
le 17 juin et se constituent eux-mêmes en Assemblée Nationale. 
Le même jour, l'Assemblée interdit toute levée d'impôts non vérifiée et 

décrétée par elle-même. Naturellement, ni le roi ni les privilégiés 
n'apprécièrent cette nouveauté. Louis XVI se résout à la rigueur 
et invita les trois ordres à reprendre leur place lors d'une prochaine séance royale.

Le serment du jeu de paume
Le 20 juin, sous prétexte d'effectuer des travaux d'entretien, 
le roi interdit l'accès de la salle où se réunissaient 
les États généraux. Les représentants du tiers état 
se rassemblèrent alors dans un gymnase qui servait au 
jeu de paume. Là, sous la proposition du député Mounier,
ils s'engagèrent « à ne jamais se séparer » avant d'avoir 
donné à la France une Constitution, chacun à leur tour les 

députés répètent « Je le jure ! ». Le lendemain, le roi ferme 
le gymnase, car il est réservé par le comte d'Artois, le frère 
du roi (Charles X). Les députés se réunissent alors dans 
l'église Saint Louis que le clergé leur a octroyé. 
Louis XVI rassemble alors des troupes pour dissoudre 
cette assemblée de récalcitrants, mais bientôt une grande 
partie du clergé se joint au tiers. Afin de limiter 
les dégâts, le roi ordonne alors au clergé et à 
la noblesse de participer avec le tiers à l'élaboration 
de textes constitutionnels. Le 9 juillet 1789, l'Assemblée 
nationale devient constituante, elle établira les fondements 
d'une monarchie constitutionnelle, on croit alors la révolution achevée.</p>
        
      </div>
	  </div>
	  </div>


	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>