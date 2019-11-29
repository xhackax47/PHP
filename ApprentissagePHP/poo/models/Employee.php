<?php

namespace Models;
use Exception;

// require_once('contracts/Worker.php');

class Employee implements \Contracts\Worker
{
    protected $firstNameEmployee;
    protected $lastNameEmployee;
    protected $ageEmployee;

    /**
     * Employe constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, int $age)
{
    $this->firstNameEmployee = $firstName;
    $this->lastNameEmployee = $lastName;
    $this->setAgeEmployee($age);
}

    /**
     * Présente une personne
     */
    public function presentation()
    {
        $presentation = "Je m'appelle $this->firstNameEmployee $this->lastNameEmployee et j'ai $this->ageEmployee ans";
        echo "<p>$presentation</p>";
    }

    /**
     * Fonction qui affiche $work dans un paragraphe HTML
     * @return string
     */
    public function work() : string {
        $work = "$this->firstNameEmployee $this->lastNameEmployee travaille...";
        return "<p>$work</p>";
    }

    /**
     * @return string
     */
    public function getFirstNameEmployee(): string
    {
        return $this->firstNameEmployee;
    }

    /**
     * @param string $firstNameEmployee
     */
    public function setFirstNameEmployee(string $firstNameEmployee)
    {
        $this->firstNameEmployee = $firstNameEmployee;
    }

    /**
     * @return string
     */
    public function getLastNameEmployee(): string
    {
        return $this->lastNameEmployee;
    }

    /**
     * @param string $lastNameEmployee
     */
    public function setLastNameEmployee(string $lastNameEmployee)
    {
        $this->lastNameEmployee = $lastNameEmployee;
    }

    /**
     * @return int
     */
    public function getAgeEmployee(): int
    {
        return $this->ageEmployee;
    }

    /**
     * @param int $ageEmployee
     * @throws Exception
     */
    public function setAgeEmployee(int $ageEmployee)
    {
        if($ageEmployee < 15 || $ageEmployee > 120) {
            throw new Exception("L'âge donné est incorrect (entre 15 et 120 ans)");
        } else {
            $this->ageEmployee = $ageEmployee;
        }
    }
}