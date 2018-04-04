<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\CoffeeTable;


class VictorianCoffeeTable implements CoffeeTable
{
    public function getMaterial(): string
    {
       return 'glasses';
    }
}