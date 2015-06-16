<?php

use Illuminate\Database\Capsule\Manager as Capsule;

define ('BASE_PATH',__DIR__);

require '../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection(require BASE_PATH . '/config/database.php');

$capsule->bootEloquent();

 

?>