<?php
/**
 * Created by Vibbe.
 * User: Rafał Drożdżal (rafal@vibbe.pl)
 * Date: 12.01.2021
 */

namespace Vibbe\BaselinkerAPI\Service;


use Symfony\Component\HttpFoundation\Response;
use Vibbe\BaselinkerAPI\Contracts\BaselinkerServiceInterface;
use Vibbe\BaselinkerAPI\Exceptions\BaselinkerException;
use Vibbe\BaselinkerAPI\Facade\BaselinkerFacade;

class BaselinkerService implements BaselinkerServiceInterface
{
    private $facade;

    /**
     * BaselinkerService constructor.
     */
    public function __construct(BaselinkerFacade $facade)
    {
        $this->facade = $facade;
    }

    public function handleAction(string $method, array $parameters = [])
    {
        try {
            if (!is_callable([$this->facade, $method])) {
                throw new BaselinkerException('Method "'.$method.'" not implemented.\'', 501);
            }

            return $this->facade->{$method}($parameters);

        } catch (\BaselinkerException $e) {

        }
    }
}