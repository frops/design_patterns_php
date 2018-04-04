<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\Chair;


class ModernChair implements Chair
{
    public function hasLegs(): bool
    {
        return true;
    }
}