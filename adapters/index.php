<?php

require 'vendor/autoload.php';

use App\Person;
use App\PaperBook;

(new Person)->read(new PaperBook);