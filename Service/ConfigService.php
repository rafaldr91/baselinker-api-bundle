<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Vibbe\BaselinkerAPI\Contracts\ConfigAdapterInterface;
use Vibbe\BaselinkerAPI\Contracts\ConfigServiceInterface;
use Vibbe\BaselinkerAPI\Model\Config;

final class ConfigService implements ConfigServiceInterface
{
    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;
    /**
     * @var ConfigAdapterInterface
     */
    private $adapter;

    public function __construct(ParameterBagInterface $parameterBag )
    {
        $this->parameterBag = $parameterBag;
    }

    /**
     * @var ConfigAdapterInterface $adapter
     */
    public function setAdapter(ConfigAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getConfig(): Config
    {
        return new Config($this->adapter->getConfigurationParams());
    }
}