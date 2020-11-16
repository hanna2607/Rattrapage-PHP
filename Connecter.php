<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */
 
$repInclude = './include/';
$repVues = './vue/';

require($repInclude . "_init.inc.php");

  $leRdv = listerRdv();
$unLog=lireDonneePost("login", "");
$unMdp=lireDonneePost("mdp", "");


if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  $nb=rechercherUtilisateur($unLog, $unMdp, $tabErreurs);
  if ($nb)
  {
      // On dit que l'utilisateur est connecte
     connecterSession($nb["login"]);
  }
  else
  {
      $message = "Aucun utilisateur ne correspond à cette référence";
      ajouterErreur($tabErreurs, $message);
      $etape = 1;
  }
  
}

// Construction de la page Rechercher
// pour l'affichage (appel des vues)



if ($etape==1)
{
  include($repVues."vConnecter.php"); 
}
elseif (estConnecte())
{
  include($repVues."vIndex.php");
}


  
  /*if($unMdp != $unMdp1)
  {
  $message = "Les mots de passes saisis ne correspondent pas ! ";
  ajouterErreur($tabErreurs, $message);
  $etape = 1;
  }
  */


  ?>