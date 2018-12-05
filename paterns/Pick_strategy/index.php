<?php
// Code in Interface

interface logger
{
    public function log($data);
}

class FileLogger implements logger
{

    public function log($data)
    {
        echo 'log to file:'. $data;
    }
}

class MailLogger implements logger
{

    public function log($data)
    {
        echo 'log to Mail:'. $data;
    }
}

class OtherLogger implements logger
{

    public function log($data)
    {
        echo 'log to other:'. $data;
    }
}

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}

$app = (new App)->log('some', new OtherLogger);
