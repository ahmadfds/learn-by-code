<?php

require __DIR__.'/Logger.php';

$logger = new StdoutLogger();
$logger = new FileLogger();

$logger->error('test output message');
$logger->warning('test output message');
$logger->notice('test output message');
$logger->info('test output message');