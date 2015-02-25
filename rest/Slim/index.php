<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
session_cache_limiter(false);
// add redbeans here later
$app = new \Slim\Slim();                    // pass an associative array to this if you want to configure the settings


$app->post("/login", function () use ($app) {

  $error=''; // error variable
  if (isset($_POST['submit'])) { // checking whether post variables are set
    if (empty($_POST['username']) || empty($_POST['password'])) {    //checking whether we got empty credentials or not
      $error = "Username or Password is invalid or empty";
    }

    else
    {
      $username=$_POST['username'];
      $password=$_POST['password'];

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
    }
  }





});































$app->run();
?>
