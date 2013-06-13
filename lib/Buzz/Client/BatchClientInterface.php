<?php

namespace kriswallsmith\Buzz\Client;

interface BatchClientInterface extends ClientInterface
{
    /**
     * Processes the queued requests.
     */
    public function flush();
}
