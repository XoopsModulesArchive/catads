<?php
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
/*
FRANCE-MAP V3.0 - 18/09/20087
Copyright (C) 2008 PAYROUSE NICOLAS - FRANCE-MAP.FR
Pour toutes questions : http://www.france-map/forum/
Merci.

INFORMATIONS SUR CE FICHIER :
Vous trouverez dansz ce fichier tous les param�tres � definir pour personnaliser et configurer votre carte
*/
define ('retour', "\r\n"); // Ne pas modifier
define ('tab', "\t"); // Ne pas modifier

//include("../../../mainfile.php");


$champFacultatifs = array(); // Ne pas modifier
$variableCible = 'ads_id' ; // Ne pas modifier

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// Param�tres de la base de donn�es

$hote        = 'localhost' ;        // Nom de votre serveur SQL
$utilisateur        = 'root' ;        // Nom d'utilisateur SQL
$motDePasse = '' ;        // Mot de passe SQL
$baseDeDonnees = '' ;        // Nom de la base de donn�es - pk - database name
$tableUtilisee = 'xoops_db_prefix_catads_ads' ;        // Nom de la table utilis�e - pk - Xoops_DB_prefix_catads_ads


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// Param�tres de champs

// Nom des champs de votre base // CHAMPS OBLIGATOIRES !
// Vous devez avoir AU MOINS ces champs dans votre base Mysql pour utiliser ce script.
// Modifier les valeurs des varaibles ci-dessous avec les noms des champs de votre base Mysql.
$champId = 'ads_id';
$champNom = 'ads_title';
$champSuspend = 'suspend';
$champWaiting = 'waiting';
$champCodePostal = 'codpost';
$champVille = 'town';
$champPays = 'pays';
$champExpired = 'expired';

// Champs facultatifs
// Vous pouvez d�sormais rajouter autant de champ que n�c�ssaire.
// Il suffit de remplir le tableau $champFacultatifs, en mettant :
// en Key : le nom du champ dans votre base mysql
// en Value : le nom qui apparaitra dans le module Flash.
//
// Exemple : vous voulez ajouter le champ 'CLI_Adresse' dans le descriptif d'un membre, ajouter ci dessous la ligne :
// $champFacultatifs['adresse'] = 'Adresse du Client';
//
// Vous pouvez ainsi ajouter tous les champs que vous voulez !


//
$champFacultatifs['ads_type'] = 'Type';
$champFacultatifs['ads_desc'] = 'Description';
$champFacultatifs['codpost'] = 'Code postal';
$champFacultatifs['town'] = 'Ville';
$champFacultatifs['phone'] = 'T�l�phone';




//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// Param�tres de couleur de la carte

// Couleur de fond de la carte
// Utiliser le format h�xad�cimal
$backgroundCouleur = 'EAEAEA';

// Couleur de l'infobulle
// Elle apparait au survol d'un d�partement ou d'une r�gion
// Utiliser le format h�xad�cimal
$couleurInfobulle = '313131';

// Couleur du texte de l'infobulle
// Utiliser le format h�xad�cimal
$couleurTexteInfobulle = 'DCDCDC';

// Couleur des l�gendes
// DOM TOM R�gion parisienne...
// Utiliser le format h�xad�cimal
$couleurLegendes = '353535';

// Couleur du contour des d�partements
// Utiliser le format h�xad�cimal
$couleurContourDepartements = '595959';

// Couleur du contour des r�gions
// Utiliser le format h�xad�cimal
$couleurContourRegions = '3C3C3C';

// Couleurs des d�partements
// Utiliser le format h�xad�cimal
// pour vous aider � choisir vos couleurs :
$couleur0 = 'FFFFCC';
$couleur1 = 'FFFF9B';
$couleur2 = 'FFFA20';
$couleur3 = 'FFD700';
$couleur4 = 'FF9C00';
$couleur5 = 'FF6200';
$couleur6 = 'FF2F00';
$couleur7 = 'FF0500';
$couleur8 = 'FF004A';
$couleur9 = 'FE00C9';
$couleur10 = 'EB00FF';
$couleur11 = 'BC00FF';


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// Param�tres des tranches de population

// Si vous voulez que les tranches soient calcul�s automatiquement : $tranchesAuto = true;
// Si vous voulez que les tranches NE SOIENT PAS calcul�s automatiquement : $tranchesAuto = false;
$tranchesAuto = false;

// Si vous avez d�fini $tranchesAuto = false, remplissez les tranches ci dessous avec les valeurs que vous voulez.
$tranche1 = 1;
$tranche2 = 3;
$tranche3 = 6;
$tranche4 = 9;
$tranche5 = 15;
$tranche6 = 25;
$tranche7 = 50;
$tranche8 = 150;
$tranche9 = 300;
$tranche10 = 600;




//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// Options

// Si vous voulez qu'il y ai un lien vers une fiche de votre site
// Si cette option est TRUE, un bouton apparait en haut du descriptif membre.
$utiliserPageCible = true;

// Si l'option utiliserPageCible est TRUE, veuillez renseigner l'url de cette page // URL relative au fichier map.php
$urlPageCible = 'adsitem.php' ;

// Le terme que vous voulez voir apparaitre sur la carte
// par exemple : club, client, prospect, magasin...
// Laisser ce terme au singulier
$unLabel = 'annonce' ;


// Si vous voulez afficher � l'ouverture de la carte les r�gions ou les d�partements
// Si vous voulez voir en premier les d�partements : $afficheFirst = 'dep';
// Si vous voulez voir en premier les r�gions : $afficheFirst = 'reg';
$afficheFirst = 'dep';

// Afficher ou non l'ombre qui entoure la carte
$showOmbre = false;



?>