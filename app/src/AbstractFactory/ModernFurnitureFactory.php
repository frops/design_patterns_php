<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory;


use App\AbstractFactory\Chair\Chair;
use App\AbstractFactory\Chair\ModernChair;
use App\AbstractFactory\CoffeeTable\CoffeeTable;
use App\AbstractFactory\CoffeeTable\ModernCoffeeTable;
use App\AbstractFactory\Sofa\ModernSofa;
use App\AbstractFactory\Sofa\Sofa;

class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new ModernCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }

    public function getName()
    {
        return 'Modern';
    }
}