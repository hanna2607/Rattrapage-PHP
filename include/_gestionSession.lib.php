<?php
/** 
 * Regroupe les fonctions de gestion d'une session utilisateur.
 * @package default
 * @todo  RAS
 */

/** 
 * Démarre ou poursuit une session.                     
 *
 * @return void
 */
function initSession() {
    session_start();
}

/** 
 * Fournit l'id du visiteur connecté.                     
 *
 * Retourne l'id du visiteur connecté, une chaîne vide si pas de visiteur connecté.
 * @return string id du visiteur connecté
 */
function obtenirIdUserConnecte() {
    $ident="";
    if ( isset($_SESSION["loginUser"]) ) {
        $ident = (isset($_SESSION["idUser"])) ? $_SESSION["idUser"] : '';   
    }  
    return $ident ;
}

/**
 * Conserve en variables session les informations du visiteur connecté
 * 
 * Conserve en variables session l'id $id et le login $login du visiteur connecté
 * @param string id du visiteur
 * @param string login du visiteur
 * @return void    
 */
function connecterSession($login) {
    $_SESSION["login"] = $login;
}

/** 
 * Déconnecte le visiteur qui s'est identifié sur le site.                     
 *
 * @return void
 */
function deconnecterSession() {
    unset($_SESSION["login"]);
}

/** 
 * Vérifie si un visiteur s'est connecté sur le site.                     
 *
 * Retourne true si un visiteur s'est identifié sur le site, false sinon. 
 * @return boolean échec ou succès
 */
function estConnecte() 
{
$ok = false;
if (isset($_SESSION["login"]))
{
  $ok = true; 
}
return $ok;
}





?>
