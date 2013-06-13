<?php

namespace kriswallsmith\Buzz\Listener;

use kriswallsmith\Buzz\Message\MessageInterface;
use kriswallsmith\Buzz\Message\RequestInterface;

interface ListenerInterface
{
    public function preSend(RequestInterface $request);
    public function postSend(RequestInterface $request, MessageInterface $response);
}
