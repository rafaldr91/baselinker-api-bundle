<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 14.01.2021
 */

namespace Vibbe\BaselinkerAPI\Contracts;


interface ConfigAdapterInterface
{
    public function getConfigurationParams(): array;
}