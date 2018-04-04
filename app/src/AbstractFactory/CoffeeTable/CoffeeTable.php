<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\CoffeeTable;


interface CoffeeTable
{
    public function getMaterial(): string;
}