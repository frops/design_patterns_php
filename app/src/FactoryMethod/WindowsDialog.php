<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\FactoryMethod;


class WindowsDialog extends Dialog
{

    /**
     * @return Button
     */
    public function createButton()
    {
        return new WindowsButton();
    }
}