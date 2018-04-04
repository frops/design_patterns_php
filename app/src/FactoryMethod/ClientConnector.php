<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\FactoryMethod;

use App\ConnectorInterface;

class ClientConnector implements ConnectorInterface
{
    /**
     * @var Dialog
     */
    private $dialog;

    /**
     */
    public function run()
    {
        $this->dialog->renderWindow();
    }

    public function init(array $params = [])
    {
        $method = isset($params['method']) ? $params['method'] : '';

        switch ($method) {
            case 'web':
                $this->dialog = new WebDialog();
                break;
            case 'windows':
                $this->dialog = new WindowsDialog();
                break;
            default:
                throw new \InvalidArgumentException("invalid method: {$method}");
        }
    }
}