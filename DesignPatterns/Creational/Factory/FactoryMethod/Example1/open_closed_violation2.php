<?php

require __DIR__.'/Logger.php';

$config = [
    'logger_type' => 'stdout'
];


/**
 * NOTE:
 * The example below is fulfill the factory method pattern, but it violates the open/closed principle, cause everytime you want to add
 * a new logger type, then you have to modify the method "createLogger" code
 */
function createLogger():ILogger
{
    global $config;
    $loggerType = $config['logger_type'];
    switch ($loggerType) {
        case 'stdout':
            return new StdoutLogger();
        case 'file':
            return new FileLogger('/tmp/test_logger');
    }
}


$logger = createLogger();
$logger->error('Sample output message');
$logger->warning('Sample output message');
$logger->notice('Sample output message');
$logger->info('Sample output message');
