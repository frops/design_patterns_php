<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\Chair;


interface Chair
{
    public function hasLegs(): bool;
}