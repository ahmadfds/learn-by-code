<?php

/**
 * NOTE:
 * The example below is fulfill the factory method pattern, but it violates the open/closed principle, cause everytime you want to add
 * a new logger type, then you have to modify the method "createLogger" code
 */

require __DIR__.'/../../Logger.php';

class LoggerFactory
{
    function createLogger(string $loggerType):ILogger
    {
        switch ($loggerType) {
            case 'stdout':
                return new StdoutLogger();
            case 'file':
                return new FileLogger('/tmp/test_logger');
        }
    }
}




/**
 * NOTE:
 * The problem with this approach that if you have to create the logger object using arguments directly in your code
 * then you have to change every "createLogger" argument value in every place you wrote, which gonna cause another
 * open/closed violation
 */
$logger = (new LoggerFactory())->createLogger('stdout');
//$logger = createLogger('file');
$logger->error('Sample output message');
$logger->warning('Sample output message');
$logger->notice('Sample output message');
$logger->info('Sample output message');
