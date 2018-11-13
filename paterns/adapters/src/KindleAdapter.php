<?php

namespace Acme;

use Acme\eReaderInterface;

class KindleAdapter implements BookInterface
{
    private $eReaderInterface;

    public function __construct(eReaderInterface $eReaderInterface)
    {
        $this->eReaderInterface = $eReaderInterface;
    }


    public function open()
    {
        return $this->eReaderInterface->turnOn();
    }

    public function turnPage()
    {
        return $this->eReaderInterface->pressNextBtn();
    }
}
