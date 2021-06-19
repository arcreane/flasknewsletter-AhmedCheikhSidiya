<form class="navbar-form navbar-right">
   <div class="form-group">
      <?php
      if ($_SESSION['connecté']==1){
          echo '<a href="deconnexion.php" target="_blank"> <input type="button" value="Déconnexion'.$_SESSION['nom_utilisateur'].'"> </a>';
      } else {
         echo '<a href="connexion.php" target="_blank"> <input type="button" value="Connexion"> </a>';
      }
