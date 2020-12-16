<?php
$dbname = "blog";
$user = "root";
$pass = "";


try {
    $db = new PDO("mysql:host=localhost;dbname = $dbname", $user, $pass);
    echo "Connnexion réussie ! ";

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;

    $sth = $db->prepare("INSERT INTO blog.users(id, name, firstname, email, password)  VALUES (:id, :name , :firstname, :email, :password)");
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->bindParam(':name', $name, PDO::PARAM_STR_CHAR);
    $sth->bindParam(':firstname', $firstname, PDO::PARAM_STR_CHAR);
    $sth->bindParam(':email', $email, PDO::PARAM_STR_CHAR);
    $sth->bindParam(':password', $password, PDO::PARAM_INT);
    $sth->execute();
    echo "Entrée ajoutée dans la table !";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
/*var_dump($_POST['id']);*/