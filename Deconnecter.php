<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
  $repInclude = './include/';
  $repVues = './vue/';
  
  require($repInclude . "_init.inc.php");
 
  deconnecterSession();
  // Construction de la page Accueil
  // pour l'affichage (appel des vues) 
 
  $etape=1;
  include($repVues."index.php");

  
?>
    