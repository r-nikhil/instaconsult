<?php
require 'Slim/Slim.php';
require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
// add redbeans here later
session_start();
$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings


$app->post("/login", function () use ($app) {


  $request = $app->request();
  $body = $request->getBody();
  $input = json_decode($body, true);

  $username=$input['username']
  $password=$input['password'];


      $connection = mysqli_connect("localhost", "root", "", "instaconsult");
      $result = mysqli_query($connection, "select * from login_client where password='$password' AND username='$username'");

      $rows = mysqli_num_rows($result);

      if ($rows == 1) {
        $_SESSION['login_client']=$username; // Initializing Session(setting the session variable)
        header("location: profile.php"); // Redirecting To Other Page
      }

      else {
        $error = "Username or Password is invalid";
      }
      mysqli_close($connection); // Closing Connection



  $app->response()->header('Content-Type', 'application/json');


  // return JSON-encoded response body with query results



});
$app->run();
?>
