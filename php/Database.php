<?php

require_once 'User.php';

class Database extends User
{

    public string $user = "root";
    protected string $db_password = "";
    protected string $dbname = "blog";


    public function __construct(string $user, string $db_password, string $dbname)
    {
        parent::__construct($this->getName(), $this->getFirstName(), $this->getPeudonyme(), $this->getEmail(), $this->getPassword());
        $this->$user;
        $this->$db_password;
        $this->$dbname;

    }

    /**
     * @return string
     */
    public function getDbPassword(): string
    {
        return $this->db_password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getPseudonyme(): string
    {
        return $this->pseudonyme;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */


    /**
     * @return string
     */
    public function getDbname(): string
    {
        return $this->dbname;
    }
    public function connexion(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=' . $this->dbname, $this->user, $this->db_password);
    }
        public function addUser(){
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $pseudonyme = $_POST['pseudonyme'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;
           $database = $this->connexion()->prepare("INSERT INTO users (name, firstname, pseudonyme, email, password ) 
                                               VALUES (?, ?, ?, ?, ?)");
           $database->execute([
               'name' => $name,
               'firstname' => $firstname,
               'pseudonyme' => $pseudonyme,
               'email' => $email,
               'password' => $password,
           ]);


        }
}








