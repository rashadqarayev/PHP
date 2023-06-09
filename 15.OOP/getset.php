<?php


class Person{

    private $name;
    private $age;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }


}

$turan = new Person();
$turan->setName("Allahverdi");
$turan->setAge(20);


$name = $turan->getName();
$age = $turan->getAge();

echo "Turan ${turan}-nin ${age} yasi var"




?>