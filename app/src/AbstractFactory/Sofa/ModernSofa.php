<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\Sofa;


class ModernSofa implements Sofa
{

    public function canSleep(): bool
    {
        return false;
    }
}