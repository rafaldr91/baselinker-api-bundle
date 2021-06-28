<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Request;


use Vibbe\BaselinkerAPI\Model\Response;
use Vibbe\BaselinkerAPI\Request\Contracts\OrdersInterface;
use Vibbe\BaselinkerAPI\Request\Contracts\Vibbe;

class Orders extends AbstractRequest implements OrdersInterface
{
    /**
     * @inheritDoc
     */
    public function getOrders(array $data): Response
    {
        return new Response(
            $this->adapter->post('getOrders', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderStatusList(): Response
    {
        return new Response(
            $this->adapter->post('getOrderStatusList')
        );
    }
}