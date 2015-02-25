<?php
require 'Slim/Slim.php';
require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
session_start();
R::setup('mysql:host=localhost;dbname=instaconsult','root','');
// R::freeze(true);

$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings

$app->post('/login', function () use ($app) {

  $body = $app->request->getBody();
$result=  json_decode($body);
$username=$result->username;
$password=$result->password;


  $app->response()->header('Content-Type', 'application/json');
});

$app->run();
?>
