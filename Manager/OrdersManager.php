<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Manager;


use Vibbe\BaselinkerAPI\Model\Response;
use Vibbe\BaselinkerAPI\Request\Orders;

class OrdersManager
{

    /** @var Orders */
    private $ordersRequest;
    /**
     * OrdersManager constructor.
     */
    public function __construct(Orders $ordersRequest)
    {
        $this->ordersRequest = $ordersRequest;
    }

    public function getOrders(array $data = []): Response
    {
        return $this->ordersRequest->getOrders($data);
    }

    public function getOrderStatusList(): Response
    {
        return $this->ordersRequest->getOrderStatusList();
    }
}