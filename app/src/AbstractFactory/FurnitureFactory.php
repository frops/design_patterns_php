<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory;


use App\AbstractFactory\Chair\Chair;
use App\AbstractFactory\CoffeeTable\CoffeeTable;
use App\AbstractFactory\Sofa\Sofa;

interface FurnitureFactory
{
    public function getName();

    public function createChair(): Chair;

    public function createCoffeeTable(): CoffeeTable;

    public function createSofa(): Sofa;
}