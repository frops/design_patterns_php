<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */

namespace App\AbstractFactory;

use App\ConnectorInterface;

class ClientConnector implements ConnectorInterface
{
    /**
     * @var FurnitureFactory
     */
    private $furnitureFactory;

    public function init(array $params = [])
    {
        $style = isset($params['style']) ? $params['style'] : '';

        switch ($style) {
            case 'modern':
                $this->furnitureFactory = new ModernFurnitureFactory();
                break;
            case 'victorian':
                $this->furnitureFactory = new VictorianFurnitureFactory();
                break;
            default:
                throw new \InvalidArgumentException("invalid style: {$style}");
        }
    }

    /**
     */
    public function run()
    {
        echo '<h2>' . $this->furnitureFactory->getName() . '</h2><hr>';

        echo '<table>';
        echo '<tr><td>Chair has legs</td><td><b>' . ($this->furnitureFactory->createChair()->hasLegs() ? 'yes' : 'no') . '</b></td></tr>';
        echo '<tr><td>Sofa can sleep</td><td><b>' . ($this->furnitureFactory->createSofa()->canSleep() ? 'yes' : 'no') . '</b></td></tr>';
        echo '<tr><td>CoffeeTable material</td><td><b>' . $this->furnitureFactory->createCoffeeTable()->getMaterial() . '</b></td></tr>';
        echo '</table>';

        var_dump($this->furnitureFactory->createChair());
        var_dump($this->furnitureFactory->createSofa());
        var_dump($this->furnitureFactory->createCoffeeTable());
    }
}