<?php
require './framework/Loader.php';

Loader::register();

$applicatioin = new \framework\Application();
$applicatioin->run();