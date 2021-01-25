<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Factory;


use GuzzleHttp\Client;
use Vibbe\BaselinkerAPI\Adapters\GuzzleHttpClientAdapter;
use Vibbe\BaselinkerAPI\Contracts\ConfigServiceInterface;
use Vibbe\BaselinkerAPI\Contracts\HttpClientAdapterInterface;

class HttpClientFactory
{
    public static function createHttpClient(ConfigServiceInterface $configService): HttpClientAdapterInterface
    {
        $httpClient = new GuzzleHttpClientAdapter(new Client(), $configService);

        return $httpClient;
    }
}