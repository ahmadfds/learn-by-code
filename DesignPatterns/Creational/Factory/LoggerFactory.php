<?php

require __DIR__.'/Logger.php';

interface ILoggerFactory
{
    public function getLogger():ILogger;
}


class StdoutLoggerFactory implements ILoggerFactory
{

    public function getLogger(): ILogger
    {
        return new StdoutLogger();
    }
}

class FileLoggerFactory implements ILoggerFactory
{

    public function getLogger(): ILogger
    {
        new FileLogger('/tmp/test_logger');
    }
}
