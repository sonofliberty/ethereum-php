<?php

namespace EthereumPHP\Methods;

use Graze\GuzzleHttp\JsonRpc\ClientInterface;
use Graze\GuzzleHttp\JsonRpc\Message\ResponseInterface;

abstract class AbstractMethods
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var ResponseInterface|null
     */
    protected $response;

    /**
     * AbstractMethods constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
