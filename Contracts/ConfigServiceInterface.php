<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Contracts;


use Vibbe\BaselinkerAPI\Model\Config;

interface ConfigServiceInterface
{
    public function getConfig(): Config;
}