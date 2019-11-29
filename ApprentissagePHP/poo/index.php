<?php

require_once('autoload.php');

use Models\Boss, Models\Employee, Contracts\Worker;

// Instanciation des objets

$employee1 = new Employee("Samy", "Chaabi", "31");
$employee2 = new Employee("Nassim", "Connard", "47");
$employee3 = new Employee("Connard", "Nassim", "57");
$boss1 = new Boss("Lakshmi", "Mittal", "48");

// Affichage titre H1 HTML

echo "<h1>Programmation orientée objet PHP</h1>";

// Appel fonction

$employee1->presentation();
$employee2->presentation();
$employee3->presentation();

// Héritage

$boss1->presentation();
$boss1->fire();

// Abstraction / Polymorphisme

function makeJob(Worker $worker) {
    echo $worker->work();
}

makeJob($employee1);
makeJob($employee2);
makeJob($employee3);
makeJob($boss1);

// Gestion exception

$employee2->setAgeEmployee("340");
$employee2->presentation();