<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Model;

use InvalidArgumentException;

class Config
{
    public const API_URL = 'https://api.baselinker.com/connector.php';

    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $host;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->set($parameters);
    }
    /**
     * @param array $parameters
     * @return \Baselinker\Config
     */
    public function set(array $parameters): self
    {
        if (!$parameters['token']) {
            throw new InvalidArgumentException('Parameter "token" must be provided in the configuration.');
        }

        $this->token = $parameters['token'];
        $this->host = $this->getHost();

        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    public function getHost(): string
    {
        return self::API_URL;
    }
}