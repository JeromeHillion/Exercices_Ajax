<?php



class User
{
    protected string $name;
    protected string $firstName;
    protected string $pseudonyme;
    protected string $email;
    protected string $password;

    public function __construct(string $name, string $firstName, string $pseudonyme, string $email, string $password)
    {
        $this->$name;
        $this->$firstName;
        $this->$pseudonyme;
        $this-> $email;
        $this->$password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getPeudonyme()
    {
        return $this->peudonyme;
    }

    /**
     * @param mixed $peudonyme
     */
    public function setPeudonyme($peudonyme): void
    {
        $this->peudonyme = $peudonyme;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }



}