<?php
include "connection.php";

$first_name= $_POST["first_name"];
$last_name= $_POST["last_name"];
$email_id=$_POST["email_id"];
$password=$_POST["password"];

$sql = "INSERT INTO signup (first_name, last_name, email, password)
VALUES ('$first_name', 'last_name', '$email_id','$password')";
if (mysqli_query($connection, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($connection);


?>
