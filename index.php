<?php


abstract class Vehicle {
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function drive();
    abstract public function activateAbility();
}


interface Abilities {
    public function signal();
    public function turnWipers();
}


class Car extends Vehicle implements Abilities {
    public function drive() {
        echo "Легковая машина {$this->brand} {$this->model} едет вперед.\n";
    }

    public function activateAbility() {
        echo "Легковая машина {$this->brand} {$this->model} использует закись азота!\n";
    }

    public function signal() {
        echo "Легковая машина {$this->brand} {$this->model} сигналит!\n";
    }

    public function turnWipers() {
        echo "Дворники легковой машины {$this->brand} {$this->model} включены.\n";
    }
}


class Bulldozer extends Vehicle implements Abilities {
    public function drive() {
        echo "Бульдозер {$this->brand} {$this->model} едет назад.\n";
    }

    public function activateAbility() {
        echo "Бульдозер {$this->brand} {$this->model} управляет ковшом!\n";
    }

    public function signal() {
        echo "Бульдозер {$this->brand} {$this->model} сигналит!\n";
    }

    public function turnWipers() {
        echo "Дворники бульдозера {$this->brand} {$this->model} включены.\n";
    }
}


class SpecialVehicle extends Vehicle implements Abilities {
    public function drive() {
        echo "Спецтехника {$this->brand} {$this->model} движется вперед.\n";
    }

    public function activateAbility() {
        echo "Спецтехника {$this->brand} {$this->model} выполняет специальную задачу!\n";
    }

    public function signal() {
        echo "Спецтехника {$this->brand} {$this->model} сигналит!\n";
    }

    public function turnWipers() {
        echo "Дворники спецтехники {$this->brand} {$this->model} включены.\n";
    }
}


function operateVehicle(Vehicle $vehicle) {
    $vehicle->drive();
    $vehicle->activateAbility();
    $vehicle->signal();
    $vehicle->turnWipers();
}


$car = new Car("Toyota", "Camry", 2023);
$bulldozer = new Bulldozer("Caterpillar", "D6", 2018);
$specialVehicle = new SpecialVehicle("John Deere", "300D", 2022);

operateVehicle($car);
operateVehicle($bulldozer);
operateVehicle($specialVehicle);

?>