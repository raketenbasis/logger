<?php namespace Logger;

class Log
{
    protected $logger;

    public function __construct()
    {
        $this->logger = array();
    }

    public function addLogger(LoggerInterface $logger)
    {
        $this->logger[] = $logger;
    }
}