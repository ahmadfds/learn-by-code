<?php
/**
 * Factory method is a creational design pattern which solves the problem of creating product objects
 * without specifying their concrete classes.
 */


interface ILogWriter
{
    public function write(string $output);
}

class StdoutLogWriter implements ILogWriter
{
    public function write(string $output)
    {
        echo $output;
    }
}

class FileLogWriter implements ILogWriter
{

    private $filePath;
    private $fp;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        $this->fp = fopen($filePath, 'a');
    }

    public function write(string $output)
    {
        fwrite($this->fp, $output);
    }

    public function __destruct()
    {
        fclose($this->fp);
    }
}



interface ILogger
{
    public function getLogWriter():ILogWriter;
    public function error(string $message);
    public function warning(string $message);
    public function notice(string $message);
    public function info(string $message);
}

abstract class Logger implements ILogger
{
    public function error(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $this->getLogWriter()->write("[$logTime] ERROR: {$message}\n");
    }

    public function warning(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $this->getLogWriter()->write("[$logTime] WARNING: {$message}\n");
    }

    public function notice(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $this->getLogWriter()->write("[$logTime] NOTICE: {$message}\n");
    }

    public function info(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $this->getLogWriter()->write("[$logTime] WARNING: {$message}\n");
    }
}


class StdoutLogger extends Logger
{

    public function getLogWriter(): ILogWriter
    {
        return new StdoutLogWriter();
    }
}


class FileLogger extends Logger
{

    public function getLogWriter(): ILogWriter
    {
        return new FileLogWriter('/tmp/factory_method.log');
    }
}