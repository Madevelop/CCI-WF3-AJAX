<?php
echo "Hello ";
/*
if(isset($_GET['nom'])){
  $nom = $_GET['nom'];
}
*/

$nom = isset($_GET['nom'])? $_GET['nom'] : "pas de prénom";
echo " Ola ".$nom;
