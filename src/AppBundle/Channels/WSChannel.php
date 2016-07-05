<?php

namespace AppBundle\Channels;


class WSChannel
{
    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    public function testLogger()
    {
        $this->logger->info('test new channel');
    }
}
