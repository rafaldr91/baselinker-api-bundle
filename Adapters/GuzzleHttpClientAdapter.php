<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Adapters;

use Vibbe\BaselinkerAPI\Contracts\ConfigServiceInterface;
use Vibbe\BaselinkerAPI\Contracts\HttpClientAdapterInterface;

use GuzzleHttp\ClientInterface;
use Vibbe\BaselinkerAPI\Service\ConfigService;

final class GuzzleHttpClientAdapter implements HttpClientAdapterInterface
{
    public const REQUEST_POST = 'POST';

    /** @var ClientInterface  */
    private $httpClient;

    /** @var ConfigServiceInterface */
    private $configuration;
    public function __construct(ClientInterface $client, ConfigServiceInterface $configuration)
    {
        $this->httpClient = $client;
        $this->configuration = $configuration;
    }
    /**
     * @throws GuzzleException
     */
    public function post(string $method, array $parameters = [])
    {
        $config = $this->configuration->getConfig();
        $response = $this->httpClient->request(
            self::REQUEST_POST,
            $config->getHost(),
            [
                'form_params' => [
                    'token' => $config->getToken(),
                    'method' => $method,
                    'parameters' => \json_encode($parameters, 0, 512),
                ],
            ]
        );
        return $response;
    }
}