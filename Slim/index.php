<?php
require 'Slim/Slim.php';
// require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
session_start();
$connection = mysqli_connect("localhost", "root", "", "instaconsult");

$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings

$app->post('/login', function () use ($app,$connection) {

$body = $app->request->getBody();
$result=  json_decode($body);
$username=$result->username;
$password=$result->password;

$result = mysqli_query($connection, "select * from login_client where password='$password' AND username='$username'");

$rows = mysqli_num_rows($result);

if ($rows == 1) {
  $_SESSION['login_client']=$username; // after the user logs the session variable is assigned.
  $app->redirect('profile');
}

else {
  echo json_encode("Username or Password is invalid");
}
mysqli_close($connection);


  $app->response()->header('Content-Type', 'application/json');
});

$app->get('/profile',function () use ($app,$connection) {
  include('session.php');
  $body = $app->request->getBody();
  $result=  json_decode($body);


  $result = mysqli_query($connection, "select * from client_data where username='$login_session_user'");
$data=mysqli_fetch_array($result);

echo json_encode($data);

  $app->response()->header('Content-Type', 'application/json');
});

$app->get('/open_project',function () use ($app,$connection) {

include('session.php');
$data=mysqli_query($connection, "select client_id from login_client where username= '$login_client'");
// $id=mysqli_fetch_row($data);
while($ide = mysqli_fetch_assoc($data)) {
  $qwe=$ide["client_id"];
}

$fields=mysqli_query($connection, "select * from open_project where client_id= '$qwe'");

$rows = array();
while($r = mysqli_fetch_assoc($fields)) {
  $rows[] = $r;
}
echo json_encode($rows);


});

$app->get('/open_project/:id', function ($ids) use ($app,$connection) {
include('session.php');

$fields=mysqli_query($connection, "select * from open_project where project_id= '$ids'");


$data=mysqli_fetch_array($fields);

echo json_encode($data);


});






$app->run();
?>
