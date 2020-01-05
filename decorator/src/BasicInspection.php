<?php

namespace App;

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }  
}