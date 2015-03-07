<?php
include "connection.php";

$email= $_POST["email"];
$sql = "INSERT INTO email (email_id) VALUES ('$email')";

if (mysqli_query($connection, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($connection);

?>
