<?php

namespace App\Service;
use App\DTO\CarProps;
class Connect
{
    public function getData(): array
    {
        $cars[] = $this->AddCar();
        $cars[] = $this->AddExtraCar();
        return $cars;
    }
    public function AddCar(): CarProps
    {
        $car = new CarProps();
        $car->setName('BMW');
        $car->setColor('black');
        $car->setCc(2000);
        return $car;
    }

    public function AddExtraCar(): CarProps
    {
        $Ncar = new CarProps();
        $Ncar->setName('HONDA');
        $Ncar->setColor('white');
        $Ncar->setCc(1600);
        return $Ncar;
    }
}