<?php

require 'vendor/autoload.php';

use App\BasicInspection;
use App\OilChange;

echo (new OilChange(new BasicInspection()))->getCost();