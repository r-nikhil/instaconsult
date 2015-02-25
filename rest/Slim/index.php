<?php
require 'Slim/Slim.php';
require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
session_start();
R::setup('mysql:host=localhost;dbname=appdata','root','');
R::freeze(true);

$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings

$app->post('/login', function () use ($app) {

  $request = $app->request();
  $body = $request->getBody();
  $input = json_decode($body);


  $app->response()->header('Content-Type', 'application/json');

});

$app->run();
?>
