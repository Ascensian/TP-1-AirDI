<?php

spl_autoload_register(function($classe){
    include "classes/" . $classe . ".class.php";
});


// try {
//     $connexion = AirdiDAO::connectAirDI("root", "");
// } catch (PDOException $err) {
//     echo $err->getMessage();
// }

var_dump(AirdiDAO::getListPilotes());

 

// $resultats=$connexion->query("SELECT nommembre 
// FROM membres 
// WHERE statut=’actif’ 
// ORDER BY nommembre ASC"); 
// var_dump($connexion->query("SELECT * FROM `pilote`"));
// var_dump($connexion);

