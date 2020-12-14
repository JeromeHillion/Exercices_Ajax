<?php
$dbname ="blog";
$user="root";
$pass="";

try {
    $db = new PDO("mysql:host=localhost;dbname = $dbname", $user, $pass);
    echo  "Connnexion réussie ! ";


   $sth= $db->prepare("INSERT INTO users(id)  VALUES (?)");
   $id = $_POST['id'];
   $sth->bindParam(':id', $id);
   $sth->execute();
   echo "Entrée ajoutée dans la table !";

}
catch (PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
/*var_dump($_POST['id']);*/