<?php

namespace App;

class EReaderAdapter implements Book
{
    private $eReader;

    public function __construct(EReader $eReader)
    {
        $this->eReader = $eReader;
    }

    public function open()
    {
        $this->eReader->turnOn();
    }

    public function turnPage()
    {
        $this->eReader->pressNextButton();
    }
}