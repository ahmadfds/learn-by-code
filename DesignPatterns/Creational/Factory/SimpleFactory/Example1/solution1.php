<?php

require __DIR__.'/../../Logger.php';

$config = [
    'logger_type' => 'stdout'
];


/**
 * NOTE: The problem here that you have to instantiate every logger object which is wrong
 */
$loggerMapper = [
    'stdout' => new StdoutLogger(),
    'file' => new FileLogger('/tmp/test_logger')
];

class LoggerFactory
{
    function createLogger():ILogger
    {
        global $config, $loggerMapper;
        $loggerType = $config['logger_type'];
        return $loggerMapper[$loggerType];
    }
}



$logger = (new LoggerFactory())->createLogger();
$logger->error('Sample output message');
$logger->warning('Sample output message');
$logger->notice('Sample output message');
$logger->info('Sample output message');
