<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace  App\FactoryMethod;


abstract class Dialog
{
    public function renderWindow()
    {
        $okButton = static::createButton();
        $okButton->render();
    }

    /**
     * @return Button
     */
    abstract public function createButton();
}