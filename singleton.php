<?php

function connect_to_database() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=EX-01',"matt","matt");
        echo "Connexion Réussie";
        return $pdo;
    } catch(PDOException $error) {
        echo "ERREUR<br />$err";
        return false;
    }
}