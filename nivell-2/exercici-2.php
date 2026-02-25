<?php

trait TraitA
{
    public function boost()
    {
        echo "S'ha iniciat el turbo";
    }
}


class Car
{

    use TraitA;

    private string $brand;
    private string $licensePlate;
    private string $fuelType;
    private int $maxSpeed;

    public function __construct(string $brand, string $licensePlate, string $fuelType, int $maxSpeed)
    {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }
}

$car = new Car("Toyota", "12345ABC", "diesel", 200);
$car->boost();

?>