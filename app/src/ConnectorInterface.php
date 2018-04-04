<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App;


interface ConnectorInterface
{
    public function init(array $params = []);
    public function run();
}