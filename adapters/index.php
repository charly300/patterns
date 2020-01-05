<?php

require 'vendor/autoload.php';

use App\Person;
use App\PaperBook;
use App\Kindle;
use App\KindleAdapter;

(new Person)->read(new KindleAdapter(new Kindle));