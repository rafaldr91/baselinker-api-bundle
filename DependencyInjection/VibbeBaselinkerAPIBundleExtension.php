<?php


namespace Vibbe\BaselinkerAPI\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class VibbeBaselinkerAPIBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration,$configs);
        $container->setParameter('vibbe_baselinker_api_bundle.host', $config['host'] ?? 'vibbe.baselinker_api.host');
        $container->setParameter('vibbe_baselinker_api_bundle.token', $config['token'] ?? 'vibbe.baselinker_api.token');
        $container->setParameter('vibbe_baselinker_api_bundle.config_adapter', $config['config_adapter'] ?? 'vibbe.baselinker.config.adapter');

        $loader->load('services.yaml');
    }
}
