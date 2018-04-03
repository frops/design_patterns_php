<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace  App\FactoryMethod;


class WebDialog extends Dialog
{
    /**
     * @return Button
     */
    public function createButton()
    {
        return new HTMLButton();
    }
}