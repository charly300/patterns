<?php

require 'vendor/autoload.php';

use App\BasicInspection;

echo (new BasicInspection())->getCost();