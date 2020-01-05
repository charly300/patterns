<?php

namespace App;

class EReaderAdapter implements Book
{
    private $kindle;

    public function __construct(EReader $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        $this->kindle->turnOn();
    }

    public function turnPage()
    {
        $this->kindle->pressNextButton();
    }
}