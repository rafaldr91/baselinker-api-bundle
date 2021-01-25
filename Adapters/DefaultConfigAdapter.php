<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 14.01.2021
 */

namespace Vibbe\BaselinkerAPI\Adapters;


use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Vibbe\BaselinkerAPI\Contracts\ConfigAdapterInterface;

class DefaultConfigAdapter implements ConfigAdapterInterface
{
    /** @var ParameterBagInterface  */
    private $parameterBag;

    /**
     * DefaultConfigAdapter constructor.
     */
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }

    public function getConfigurationParams(): array
    {
        return [
            'token' =>  $this->parameterBag->get('vibbe_baselinker_api_bundle.token')
        ];
    }
}