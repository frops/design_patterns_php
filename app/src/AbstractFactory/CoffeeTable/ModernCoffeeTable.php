<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\CoffeeTable;


class ModernCoffeeTable implements CoffeeTable
{

    public function getMaterial(): string
    {
        return 'wood';
    }
}