<?php

class Car {
    public $brand;     // Public property
    protected $color;  // Protected property
    private $price;    // Private property

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function startEngine() {
        echo "Engine started!";
    }

    public function repaintCar($newColor) {
        $this->repaint($newColor);  // Call the protected method from within the class
    }

    protected function repaint($newColor) {
        $this->color = $newColor;
        echo "Car repainted to $newColor.";
    }

    private function calculatePrice() {
        // Some calculation logic
        $this->price = 50000;
    }
}

$myCar = new Car("Toyota", "Blue");  // Pass arguments for the constructor

$myCar->brand = "Toyota";  // Public property can be accessed directly
$myCar->startEngine();  // Output: Engine started!

$myCar->repaintCar("Red");  // Output: Car repainted to Red.



?>