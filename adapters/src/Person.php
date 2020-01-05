<?php

namespace App;

class Person
{
    public function read(Book $book)
    {
        $book->open();
        $book->turnPage();
    }
}