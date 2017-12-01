<?php
/*=========================================================
Require autoload.php => ajout des librairies php avec Composer
Utilisation de la librairie PHP Paginator
==========================================================*/
require('vendor/autoload.php');
use JasonGrimes\Paginator;
/*=========================================================
Inclusion de la Classe PDO => pdo.php
Inclusion de mes fonctions => fonctions.php
==========================================================*/
include('inc/pdo.php');
include('inc/fonctions.php');
?>

<?php $title ='Accueil' ?>

<!-- Include Entête -->
<?php include('inc/header.php'); ?>

<!-- Début index -->
<h1>Page Accueil</h1>



<!-- Fin index -->
<?php include('inc/footer.php'); ?>
