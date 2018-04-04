<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\Sofa;


class VictorianSofa implements Sofa
{

    public function canSleep(): bool
    {
       return true;
    }
}