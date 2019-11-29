<?php

namespace Models;

// require_once('Employee.php');

class Boss extends Employee
{
    /**
     * Fonction qui affiche $fired dans un paragraphe HTML
     */
    public function fire() {
        $fired = "Tu es viré";
        echo "<p>$fired</p>";
    }

    /**
     * Fonction qui redefinie la fonction presentation de la classe Employee et affiche $presentation dans un paragraphe HTML
     */
    public function presentation()
    {
        $presentation = "JE M'APPELLE $this->firstNameEmployee $this->lastNameEmployee ET J'AI $this->ageEmployee ANS.";
        echo "<p>$presentation</p>";
    }

    /**
     * Fonction qui retourne la string work dans un paragraphe HTML
     * @return string
     */
    public function work() : string {
        $work = "$this->firstNameEmployee $this->lastNameEmployee dirige l'entreprise...";
        return "<p>$work</p>";
    }
}