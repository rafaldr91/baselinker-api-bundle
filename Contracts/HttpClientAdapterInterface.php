<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Contracts;


interface HttpClientAdapterInterface
{
    public function post(string $method, array $parameters = []);
}