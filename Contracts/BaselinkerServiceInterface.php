<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Contracts;


interface BaselinkerServiceInterface
{
    public function handleAction(string $method, array $parameters = []);
}