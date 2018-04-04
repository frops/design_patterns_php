<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory\Sofa;


interface Sofa
{
    public function canSleep(): bool;
}