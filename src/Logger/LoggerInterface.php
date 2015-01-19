<?php namespace Logger;

interface LoggerInterface
{
    public function log($level, $message);
}