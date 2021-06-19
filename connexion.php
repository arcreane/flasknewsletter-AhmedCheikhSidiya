<?php if (isset($_SESSION['connecte']) && $_SESSION['connecte']==1): ?>
 
  
 
 <?php else: ?>
 
  <button type="submit" class="btn btn-success">Se connecter</button>
  <button type="submit" class="btn btn-success">S'inscrire</button>
  <button type="submit" class="btn btn-danger">Deconnexion</button>
 
 <?php endif ?>