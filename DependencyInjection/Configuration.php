<?php


namespace Vibbe\BaselinkerAPI\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('vibbe_baselinker_api_bundle');

        $treeBuilder
            ->getRootNode()
            ->end();


        return $treeBuilder;
    }

}
