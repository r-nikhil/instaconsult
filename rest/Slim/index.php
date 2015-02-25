<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();




$app = new \Slim\Slim();                 // pass an associative array to this if you want to configure the settings































$app->run();
?>
