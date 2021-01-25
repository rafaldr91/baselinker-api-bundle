<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Request\Contracts;

use Vibbe\BaselinkerAPI\Model\Response;

interface OrdersInterface
{
    /**
     * @param array $data
     * @return Vibbe\BaselinkerAPI\Model\Response
     */
    public function getOrders(array $data): Response;

}