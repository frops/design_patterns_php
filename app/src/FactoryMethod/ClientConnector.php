<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\FactoryMethod;

use App\ConnectorInterface;
use App\Exceptions\InvalidInputDataException;

class ClientConnector implements ConnectorInterface
{
    /**
     * @param array $params
     * @throws InvalidInputDataException
     */
    public function run(array $params = [])
    {
        if ($params['method'] === 'windows') {
            $dialog = new WindowsDialog();
        } else if ($params['method'] === 'web') {
            $dialog = new WebDialog();
        } else {
            throw new InvalidInputDataException("invalid method");
        }

        $dialog->renderWindow();
    }
}