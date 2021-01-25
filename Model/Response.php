<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Model;


use Psr\Http\Message\ResponseInterface;
use Vibbe\BaselinkerAPI\Exceptions\BaselinkerException;

class Response
{
    /**
     * @var string
     */
    private $response;

    /**
     * @var string
     */
    private $contents;

    /**
     * @var array
     */
    private $array;

    /**
     * @param string $response
     * @throws \Baselinker\Api\Response\BaselinkerException
     */
    public function __construct($response)
    {
        $this->response = $response;
        if ($this->hasError()) {
            $data = $this->toArray();

            throw new BaselinkerException($data['error_message'], $data['error_code']);
        }
    }

    /**
     * Return the response's body as a `string`.
     *
     * @return string
     */
    public function contents(): string
    {
        if (!$this->contents) {
            $this->contents = $this->response->getBody()->getContents();
        }

        return $this->contents;
    }

    /**
     * Return the response as an `array`.
     *
     * @return array
     */
    public function toArray(): array
    {
        if (!$this->array) {
            $this->array = json_decode($this->contents(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->array = [];
            }
        }

        return $this->array;
    }

    /**
     * Return the provided parameter's value from the response's JSON.
     *
     * @param string $parameter
     * @return mixed
     */
    public function getParameter(string $parameter)
    {
        return $this->toArray()[$parameter];
    }

    /**
     * Return `true` if response status isn't "success".
     *
     * @return bool
     */
    private function hasError(): bool
    {
        $status = $this->getParameter('status');

        return strtolower($status) !== 'success';
    }

    private function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}