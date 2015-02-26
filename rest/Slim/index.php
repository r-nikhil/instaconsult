<?php
require 'Slim/Slim.php';
// require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
session_start();


// R::setup('mysql:host=localhost;dbname=instaconsult','root','');
// R::freeze(true);
// $authenticate = function ($app) {
//   return function () use ($app) {
//     if (!isset($_SESSION['user'])) {
//       $app->redirect('login');
//     }
//   };
// }

$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings

$app->post('/login', function () use ($app) {

  $body = $app->request->getBody();
$result=  json_decode($body);
$username=$result->username;
$password=$result->password;

$connection = mysqli_connect("localhost", "root", "", "instaconsult");
$result = mysqli_query($connection, "select * from login_client where password='$password' AND username='$username'");

$rows = mysqli_num_rows($result);

if ($rows == 1) {
  $_SESSION['login_client']=$username;
  $app->redirect('profile'); // Initializing Session(setting the session variable)
}

else {
  echo json_encode("Username or Password is invalid");
}
mysqli_close($connection);


  $app->response()->header('Content-Type', 'application/json');
});



$app->get('/profile',function () use ($app) {
  echo json_encode("yolo");


  $app->response()->header('Content-Type', 'application/json');


});



$app->run();
?>
