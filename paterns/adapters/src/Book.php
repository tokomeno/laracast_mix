<?php

namespace Acme;

class Book implements BookInterface
{
    public function open()
    {
        var_dump('opening the papaer');
    }

    public function turnPage()
    {
        var_dump('turn page of paper book');
    }
}
