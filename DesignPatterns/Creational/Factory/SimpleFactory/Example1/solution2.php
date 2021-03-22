<?php

require __DIR__.'/../../LoggerFactory.php';

$config = [
    'logger_type' => 'stdout'
];

$loggerFactoryMapper = [
    'stdout' => StdoutLoggerFactory::class ,
    'file' => FileLoggerFactory::class
];

class LoggerFactory
{
    function createLogger(): ILogger
    {
        global $config, $loggerFactoryMapper;
        $loggerFactoryClass = $loggerFactoryMapper[$config['logger_type']];
        $factory = new $loggerFactoryClass();
        return $factory->getLogger();
    }
}


$logger = (new LoggerFactory())->createLogger();
$logger->error('Sample output message');
$logger->warning('Sample output message');
$logger->notice('Sample output message');
$logger->info('Sample output message');
