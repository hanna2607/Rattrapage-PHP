<?php

function connecterServeurBD() 
{
    $PARAM_hote='localhost'; // le chemin vers le serveur
    $PARAM_port='3306';
    $PARAM_nom_bd='hanna'; // le nom de votre base de données
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter

    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    $connect -> query("SET NAMES 'utf8'");
    return $connect;
}

//CONNEXION

function rechercherUtilisateur($login, $mdp, &$tabErr)
{     
    $connexion = connecterServeurBD();
    $resultat = array();
    $requete="select * from utilisateur where mdp = '".$mdp."' and nom = '".$login."';";
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
    $i = 0;
    $ligne = $jeuResultat->fetch();
   if(!$ligne)
   {
    $message="Le nom d'utilisateur ou le mot de passe est incorrect. Veuillez réessayer.";
    ajouterErreur($tabErr, $message);
   } 
   else
   {
      $message= "Content de vous voir ";
      ajouterErreur($tabErr, $message);
      $resultat["login"]=$ligne["nom"];
   }
   return ($resultat);
}




function supprimerUt($login,&$tabErr)
{
  // Ouvrir une connexion au serveur mysql en s'identifiant
  $connexion = connecterServeurBD();
    
    // Vérifier que la référence saisie n'existe pas déja
    $requete="select * from utilisateur";
    $requete=$requete." where nom = '".$login."';"; 
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    //$jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
    
    $ligne = $jeuResultat->fetch();
    if (!$ligne)
    {
      $message="Echec de la suppression : le nom d'utilisateur n'existe pas !";
      ajouterErreur($tabErr, $message);
    }
    else
    {
      // Créer la requête d'ajout 
       $requete="delete from utilisateur where nom ='".$login."';";

     
        // Lancer la requête d'ajout 
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        // Si la requête a réussi
        if ($ok)
        {
          $message = "L'utilisateur a été correctement supprimée";
          ajouterErreur($tabErr, $message);          
        }
        else
        {
          $message = "Attention, la suppression de l'utilisateur a échoué !!!";
          ajouterErreur($tabErr, $message);

        } 
        
  
    }
  }

function connecter($login, $mdp, &$tabErr)
{     
    $connexion = connecterServeurBD();
    $resultat = array();
    $requete="select * from utilisateur where mdp = '".$mdp."' and nom = '".$login."';";
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
    $i = 0;
    $ligne = $jeuResultat->fetch();
   if(!$ligne)
   {
    $message="Le nom d'utilisateur ou le mot de passe est incorrect. Veuillez réessayer.";
    ajouterErreur($tabErr, $message);
   } 
   else
   {
      $resultat["login"]=$ligne["nom"];
   }
   return ($resultat);
}

function ajouterRdv ( $nom, $prenom, $date,$heure, &$tabErr)
{
  $connexion = connecterServeurBD();
  
    $requete="insert into rdv"
    ."(nom,prenom,date,heure) values ('"
    .$nom."','"
    .$prenom."','"
    .$date." ','"
    .$heure."');";


    $ok=$connexion->query($requete);
    if ($ok)
    {
      $message = "Le rdv a été correctement ajouter";
      ajouterErreur($tabErr, $message);
    }
    else
    {
      $message = "Desolée, l'ajout du rdv a echoué";
      ajouterErreur($tabErr, $message);
    }
  
}

function listerRdv()
{
  $connexion = connecterServeurBD();
  $requete="select nom, prenom, date, heure from rdv order by date";
  $jeuResultat=$connexion->query($requete);
  $options = array();
  $i = 0;
  $ligne = $jeuResultat->fetch();

  while ($ligne)
  {
    
    $rdv[$i]['nom']=$ligne['nom'];
    $rdv[$i]['prenom']=$ligne['prenom'];
    $rdv[$i]['date']=$ligne['date'];
    $rdv[$i]['heure']=$ligne['heure'];

  
    $ligne=$jeuResultat->fetch();
    $i = $i + 1;
  }
   if (!isset($rdv)) {
    
  } else{
  $jeuResultat->closeCursor();

  return $rdv;
}
}






?>