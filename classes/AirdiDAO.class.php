<?php

class AirdiDAO {

    static $connexion;

    static function getListPilotes() {
        
        // Préparer la requête SQL
        $requete = "SELECT * FROM `pilote`";
        // Récupérer la connexion
        $connexion = AirdiDAO::connectAirDI("root", "");
        // Exécuter la requête
        $c = $connexion->query($requete);
        // Mettre les résultats dans un tableau
        $tab = $c->fetchAll();
        // Retourner le tableau
        return $tab;
    }


    private static function connectAirDI(string $user, string $pwd) {
        // $PARAM_hote='localhost';
        // $PARAM_port='3306';
        // $PARAM_nom_bd='airdi';

        // Récupérer les parametres de la bdd avec les sections

        $tParam = parse_ini_file("param/param.ini", true);

        // Créé dynamiquement les variables

        extract($tParam['BDD']);
        
        var_dump($tParam);
        $PARAM_utilisateur=$user;
        $PARAM_mot_passe=$pwd;
        $PARAM_dsn = self::$connexion = "mysql:host=$hote; port=$port; dbname=$dbname; charset=utf8";
        $c = new PDO($PARAM_dsn, $PARAM_utilisateur, $PARAM_mot_passe);
        return $c;
    }

    


    

}

