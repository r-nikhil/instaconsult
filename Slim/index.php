<?php
require 'Slim/Slim.php';
// require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
session_start();
$connection = mysqli_connect("localhost", "root", "", "instaconsult");
include 'db.php';
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

$app->get('/profile_client',function () use ($app,$connection) {
  include('db.php');
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


$app->get('/closed_project',function () use ($app,$connection) {

  include('session.php');
  $data=mysqli_query($connection, "select client_id from login_client where username= '$login_client'");
  // $id=mysqli_fetch_row($data);
  while($ide = mysqli_fetch_assoc($data)) {
    $qwe=$ide["client_id"];
  }

  $fields=mysqli_query($connection, "select * from closed_project where client_id= '$qwe'");

  $rows = array();
  while($r = mysqli_fetch_assoc($fields)) {
    $rows[] = $r;
  }
  echo json_encode($rows);


});

$app->get('/closed_project/:id', function ($ids) use ($app,$connection) {
  include('session.php');

  $fields=mysqli_query($connection, "select * from closed_project where project_id= '$ids'");


  $data=mysqli_fetch_array($fields);

  echo json_encode($data);


});
$app->get('/accepted_project',function () use ($app,$connection) {

  include('session.php');
  $data=mysqli_query($connection, "select client_id from login_client where username= '$login_client'");
  // $id=mysqli_fetch_row($data);
  while($ide = mysqli_fetch_assoc($data)) {
    $qwe=$ide["client_id"];
  }

  $fields=mysqli_query($connection, "select * from accepted_project where client_id= '$qwe'");

  $rows = array();
  while($r = mysqli_fetch_assoc($fields)) {
    $rows[] = $r;
  }
  echo json_encode($rows);


});

$app->get('/accepted_project/:id', function ($ids) use ($app,$connection) {
  include('session.php');

  $fields=mysqli_query($connection, "select * from accepted_project where project_id= '$ids'");


  $data=mysqli_fetch_array($fields);

  echo json_encode($data);


});
$app->get('/deadline_project',function () use ($app,$connection) {

  include('session.php');
  $data=mysqli_query($connection, "select client_id from login_client where username= '$login_client'");
  // $id=mysqli_fetch_row($data);
  while($ide = mysqli_fetch_assoc($data)) {
    $qwe=$ide["client_id"];
  }

  $fields=mysqli_query($connection, "select * from deadline_project where client_id= '$qwe'");

  $rows = array();
  while($r = mysqli_fetch_assoc($fields)) {
    $rows[] = $r;
  }
  echo json_encode($rows);


});

$app->get('/deadline_project/:id', function ($ids) use ($app,$connection) {
  include('session.php');

  $fields=mysqli_query($connection, "select * from deadline_project where project_id= '$ids'");


  $data=mysqli_fetch_array($fields);

  echo json_encode($data);


});

$app->put('/create_profile_client', function () use ($app,$connection) {
  $request = $app->request();
  $body = $request->getBody();
  $input = json_decode($body);
  $usernameee=$input->username;
  $firstname=$input->firstname;
  $lastname=$input->lastname;
  $email=$input->email;
  $country=$input->country;


$query=mysqli_query($connection, "INSERT INTO client_data (username, first_name, last_name, email, Country)
VALUES ('$usernameee','$firstname','$lastname','email','$country')" );
});


$app->put('/create_profile_expert', function () use ($app,$connection) {
  $request = $app->request();
  $body = $request->getBody();
  $input = json_decode($body);
  



});







$app->run();
?>
