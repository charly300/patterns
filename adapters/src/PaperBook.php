<?php

namespace App;

class PaperBook implements Book
{
    public function open()
    {
        var_dump('Opening the paper book!');
    }

    public function turnPage()
    {
        var_dump('Turning the page of the paper book!');
    }
}