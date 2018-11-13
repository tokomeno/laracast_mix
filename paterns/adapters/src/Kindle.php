<?php
namespace Acme;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn on kindel');
    }

    public function pressNextBtn()
    {
        var_dump('next btn');
    }
}
