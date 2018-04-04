<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory;


use App\AbstractFactory\Chair\Chair;
use App\AbstractFactory\Chair\VictorianChair;
use App\AbstractFactory\CoffeeTable\CoffeeTable;
use App\AbstractFactory\CoffeeTable\VictorianCoffeeTable;
use App\AbstractFactory\Sofa\Sofa;
use App\AbstractFactory\Sofa\VictorianSofa;

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new VictorianCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }

    public function getName()
    {
        return 'Victorian';
    }
}