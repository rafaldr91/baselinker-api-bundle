<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 11.01.2021
 */

namespace Vibbe\BaselinkerAPI\Exceptions;

use Exception;
use Throwable;

class BaselinkerException extends Exception implements Throwable
{

    /**
     * BaselinkerException constructor.
     */
    public function __construct(string $responseMessage, string $responseCode)
    {
        parent::__construct("[{$responseCode}] {$responseMessage}");

        $this->responseMessage = $responseMessage;
        $this->responseCode = $responseCode;
    }

    /**
     * @return string
     */
    public function responseMessage(): string
    {
        return $this->responseMessage;
    }

    /**
     * @return string
     */
    public function responseCode(): string
    {
        return $this->responseCode;
    }
}