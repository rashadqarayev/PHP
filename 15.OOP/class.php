<?php

// Class yaratmaq

class Car {
    // Properties
    public $brand;
    public $color;
    private $price;

    // Methods
    public function startEngine() {
        echo "Engine started!";
    }

    public function getPrice() {
        return $this->price;
    }
}



// Car class-ından yeni obyekt yaratmaq
$myCar = new Car();

// Obyektin xüsusiyyətlərinə məlumat daxil etmək
$myCar->brand = "Toyota";
$myCar->color = "Blue";
$myCar->startEngine(); // "Engine started!" yazdıracaq



?>