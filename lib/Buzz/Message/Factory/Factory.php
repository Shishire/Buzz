<?php

namespace kriswallsmith\Buzz\Message\Factory;

use kriswallsmith\Buzz\Message\Form\FormRequest;
use kriswallsmith\Buzz\Message\Request;
use kriswallsmith\Buzz\Message\RequestInterface;
use kriswallsmith\Buzz\Message\Response;

class Factory implements FactoryInterface
{
    public function createRequest($method = RequestInterface::METHOD_GET, $resource = '/', $host = null)
    {
        return new Request($method, $resource, $host);
    }

    public function createFormRequest($method = RequestInterface::METHOD_POST, $resource = '/', $host = null)
    {
        return new FormRequest($method, $resource, $host);
    }

    public function createResponse()
    {
        return new Response();
    }
}
