<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Facade;


use Vibbe\BaselinkerAPI\Manager\OrdersManager;
use Vibbe\BaselinkerAPI\Model\Response;
class BaselinkerFacade
{
    /** @var OrdersManager */
    private $orders;

    public function __construct(OrdersManager $ordersManager)
    {
        $this->orders = $ordersManager;
    }

    public function getOrders(array $data = []): Response
    {
        return $this->orders->getOrders($data);
    }
}