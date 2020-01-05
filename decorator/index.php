<?php

require 'vendor/autoload.php';

use App\BasicInspection;
use App\OilChange;
use App\TireRotation;

echo (new TireRotation(new OilChange(new BasicInspection())))->getCost();