<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace  App\FactoryMethod;


class HTMLButton implements Button
{
    public function render()
    {
        echo '<div style="padding: 5px;border: 1px  #aaa solid;flex: border-box">Кнопка HTML</div>';
    }
}