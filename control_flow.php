<?php
include 'variables.php'; 

$person = new Person($ageYears);

class Person {
    public $age;

    public function __construct($age) {
        $this->age = $age;
    }

    public function checkIfAdult() {
        if ($this->age >= 18) {
            return "You are an adult.";
        } else {
            return "You are a minor.";
        }
    }
}

echo $person->checkIfAdult();
?>
