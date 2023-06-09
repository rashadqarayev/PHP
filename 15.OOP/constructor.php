<?php
// Constuctor və Destructor 

class Car {
    public $brand;
    public $color;

    // Constructor istifadesi
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Destructor istifadesi
    public function __destruct() {
        echo "Car obyekti mehv edildi.";
    }
}

// Constructor komeyile yeni obyekt yaratmaq
$myCar = new Car("Ferrari", "Mavi");

// Obyektin xüsusiyyətlərinə məlumat daxil etmək
echo $myCar->brand;  // Output: Ferrari
echo $myCar->color;  // Output: Mavi

// Destructor komeyile obyekti mehv etmek
// Output: Car obyekti mehv edildi.

?>