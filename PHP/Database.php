<?php

require_once 'User.php';
$database = new User();


class Database
{

    public function connexion()
    {
        $user = "root";
        $password = "root";
        $dbname = "blog";
        try {
            $database = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $password);
            echo 'Connexion Reussie !';
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
        /*public function createTable(){

        $database->"CREATE TABLE user FROM blog"
        }*/

}