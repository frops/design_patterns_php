<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace  App\FactoryMethod;


class WindowsButton implements Button
{
    public function render()
    {
        echo '<br><button>WIN BTN</button><br>';
    }
}