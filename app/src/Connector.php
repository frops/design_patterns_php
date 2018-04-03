<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App;

class Connector
{
    /**
     * @param $patternName
     * @param array $params
     */
    public static function run($patternName, array $params = [])
    {
        $className = "App\\{$patternName}\\ClientConnector";

        /** @var ConnectorInterface $connector */
        $connector = new $className();
        $connector->run($params);
    }

}