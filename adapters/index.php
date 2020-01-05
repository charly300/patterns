<?php

require 'vendor/autoload.php';

use App\Person;
use App\PaperBook;
use App\Kindle;
use App\EReaderAdapter;

(new Person)->read(new EReaderAdapter(new Kindle));