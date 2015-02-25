<?php
require 'Slim/Slim.php';
require 'RedBean/rb.php';
\Slim\Slim::registerAutoloader();
// session_cache_limiter(false);
// session_start();
$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings

$app->post('/login', function () use ($app) {


  $username = $app->request->post('username');
  $password = $app->request->post('password');


      echo json_encode($username);
      echo json_encode($password);

      $connection = mysqli_connect("localhost", "root", "", "instaconsult");
      $result = mysqli_query($connection, "select * from login_client where password='$password' AND username='$username'");

      $rows = mysqli_num_rows($result);

      if ($rows == 1) {
        $_SESSION['login_client']=$username; // Initializing Session(setting the session variable)
        echo json_encode("logged in"); // Redirecting To Other Page
      }

      else {
        echo json_encode("Username or Password is invalid");
      }
      mysqli_close($connection); // Closing Connection



  $app->response()->header('Content-Type', 'application/json');

});

$app->run();
?>
