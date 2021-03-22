<?php
/**
 * Factory method is a creational design pattern which solves the problem of creating product objects
 * without specifying their concrete classes.
 */



interface ILogger
{
    public function error(string $message);
    public function warning(string $message);
    public function notice(string $message);
    public function info(string $message);
}


class StdoutLogger implements ILogger
{

    public function error(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        echo "[$logTime] ERROR: {$message}\n";
    }

    public function warning(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        echo "[$logTime] WARNING: {$message}\n";
    }

    public function notice(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        echo "[$logTime] NOTICE: {$message}\n";
    }

    public function info(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        echo "[$logTime] WARNING: {$message}\n";
    }
}

class FileLogger implements ILogger
{

    private $filePath;
    private $fp;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        $this->fp = fopen($filePath, 'a');
    }

    public function error(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $message = "[$logTime] ERROR: {$message}\n";
        fwrite($this->fp, $message);
    }

    public function warning(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $message = "[$logTime] WARNING: {$message}\n";
        fwrite($this->fp, $message);
    }

    public function notice(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $message = "[$logTime] NOTICE: {$message}\n";
        fwrite($this->fp, $message);
    }

    public function info(string $message)
    {
        $logTime = date('Y-m-d H:i:s');
        $message = "[$logTime] INFO: {$message}\n";
        fwrite($this->fp, $message);
    }

    public function __destruct()
    {
        fclose($this->fp);
    }
}