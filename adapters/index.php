<?php

require 'vendor/autoload.php';

use App\Person;
use App\Book;

(new Person)->read(new Book);