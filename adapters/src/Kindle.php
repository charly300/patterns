<?php

namespace App;

class Kindle implements EReader
{
    public function turnOn()
    {
        var_dump('Turn the Kindle on!');
    }
    
    public function pressNextButton()
    {
        var_dump('Press the next button on the kindle!');
    }
}