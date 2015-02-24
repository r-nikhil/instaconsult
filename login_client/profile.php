<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">

<b id="welcome">Welcome : <i><?php echo  $login_session_user ; ?></i></b>
<?php
echo $user_email;
echo $user_country;
echo $open_project_id;
echo $finished_project_id;
echo $accepted_project_id;


?>

<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
