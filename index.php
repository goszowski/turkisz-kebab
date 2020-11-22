<?php

require_once 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('src/views', 'cache');

echo $blade->make('layout', ['name' => 'John Doe'])->render();
