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
}



// Car class-ından yeni obyekt yaratmaq
$myCar = new Car();

// Obyektin xüsusiyyətlərinə məlumat daxil etmək
$myCar->brand = "Toyota";
$myCar->color = "Blue";

echo $myCar->brand;
echo $myCar->color;



?>