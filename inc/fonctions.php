<?php
/*
  LES FONCTIONS
  Les variables sont locales à la fonction
*/

/* fonction retour à la ligne <br />
  pas d'argument
*/
function br() {
  echo '<br />';
 }

/* fonction division
  argument : $a
  opérateur : /
  argument : $b
  retourne le résultat sous forme de variable de type number
*/
function divise($a,$b) {
  $result = 'erreur';
  if(is_numeric($a) && is_numeric($b)) { // vérifie si les arguments sont des nombres
    $result = $a / $b;
  }
  return $result;
}

/* fonction Debug
  argument : $array (tableau)
  Affiche le tableau sous forme de liste indentée
*/
function debug($array) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

/* fonction Capitalize (Première lettre en majuscule)
  argument : $string (chaîne de caractère)
  Affiche ma première lettre d'une chaîne de caractère en majuscule et le reste en minuscule
*/
function maj($string) {
  $string = ucfirst(strtolower($string));
  return $string;
}

/* fonction Minalize (Première lettre d'une chaîne en minscule)
  argument : $string (chaîne de caractère)
  Affiche ma première lettre d'une chaîne de caractère en minuscule et le reste en majuscule
*/
function minus($string) {
  $string = lcfirst(strtoupper($string));
  return $string;
}

// fonction heure au format 24h00
function heure() {
  $result = date('G').' heures '.date('i').' minutes';
  echo 'il est actuellement : '.$result;
  }

/*
function date() {
  $result = date('d').' heures '.date('i').' minutes';
  echo 'Nous sommes le '.$result;
  }
  */

//créez un array contenant 10 défauts
// créez un array contenant 10 noms de plats typiques français

/*
$tab_defauts = array('borné','jaloux','cupide','avare','paresseux','fainéant','intéressé','menteur','hypocryte','bavard');
$tab_plats = array('Charlotte','Soupe','Blanquette','Bourguignon','Tête de veau','Fondue','Magret','Quiche','Choucroute','Tourte');

function generateGroupName() {
  global $tab_defauts, $tab_plats;
  $defaut = $tab_defauts[array_rand($tab_defauts)];
  $plat = $tab_plats[array_rand($tab_plats)];
  $result = $plat.' '.$defaut;
  echo '<div style="background-color: pink;">'.$result.'</div>';
}

generateGroupName();

// correction

$defauts = array('borné','jaloux','cupide','avare','paresseux','fainéant','intéressé','menteur','hypocryte','bavard');
$plats = array('Charlotte','Soupe','Blanquette','Bourguignon','Tête de veau','Fondue','Magret','Quiche','Choucroute','Tourte');

function generateGroupName1() {
  global $defauts, $meals;
  $indexMaxDefauts = count($defauts) -1;
  $indexMaxMeals = count($meals) -1;

  $random_defaut = $defauts[rand(0,$indexMaxDefauts)];
  $random_meal = $meals[rand(0,$indexMaxMeals)];

  $group_name = ucwords($random_meal . ' ' . $random_defaut);
  echo '<div style="background-color: pink;">'.$group_name.'</div>';

}

generateGroupName1();

*/
