<?php

namespace kriswallsmith\Buzz\Listener;

use kriswallsmith\Buzz\Message\MessageInterface;
use kriswallsmith\Buzz\Message\RequestInterface;
use kriswallsmith\Buzz\Exception\InvalidArgumentException;

class LoggerListener implements ListenerInterface
{
    private $logger;
    private $prefix;
    private $startTime;

    public function __construct($logger, $prefix = null)
    {
        if (!is_callable($logger)) {
            throw new InvalidArgumentException('The logger must be a callable.');
        }

        $this->logger = $logger;
        $this->prefix = $prefix;
    }

    public function preSend(RequestInterface $request)
    {
        $this->startTime = microtime(true);
    }

    public function postSend(RequestInterface $request, MessageInterface $response)
    {
        $seconds = microtime(true) - $this->startTime;

        call_user_func($this->logger, sprintf('%sSent "%s %s%s" in %dms', $this->prefix, $request->getMethod(), $request->getHost(), $request->getResource(), round($seconds * 1000)));
    }
}
