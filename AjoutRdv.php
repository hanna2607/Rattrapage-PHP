<?php
$repVues = './vues/';
require("./include/_bdGestionDonnees.lib.php");
require("./include/_gestionSession.lib.php");
require("./include/_utilitairesEtGestionErreurs.lib.php");
// démarrage ou reprise de la session
initSession();
// initialement, aucune erreur ...
$tabErreurs = array();


$unNom= lireDonneePost("nom");
$unPrenom = lireDonneePost("prenom");
$uneDate = lireDonneePost("date");
$uneHeure = lireDonneePost("heure");



if (count($_POST) == 0)
{
	$etape = 1;
	
}
else
{
	$etape = 2;
	ajouterRdv($unNom,$unPrenom,$uneDate,$uneHeure,$tabErreurs);
	
}

if ($etape==1)
{
?>
<div class="error-message">Echec, le rdv est deja pris a cette horaire</div>
<?php
}
elseif ($etape==2)
{
?>
<div>Votre rendez-vous a bien été pris. Merci!</div>
<?php
 
}


?>