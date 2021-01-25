<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Request;


use Vibbe\BaselinkerAPI\Adapters\GuzzleHttpClientAdapter;
use Vibbe\BaselinkerAPI\Contracts\HttpClientAdapterInterface;

abstract class AbstractRequest
{
    /** @var HttpClientAdapterInterface  */
    protected $adapter;

    /**
     * Request constructor.
     */
    public function __construct(HttpClientAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
}