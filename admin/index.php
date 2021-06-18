<?php
ob_start();
include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
	<title>Admin Login</title>
</head>
<body>
	<div class="container">

    <h2 style="text-align: center; padding: 20px;">Admin Login</h2>

   <form action="" method="POST">
    <label for="uname">Username:</label><br>
    <input type="text" id="uname" name="uname"><br>
    <label for="pword">Password:</label><br>
    <input type="password" id="pword" name="pword"><br><br>
    <button type="submit" name="submit">Login</button>

    <?php 
    if (isset($_POST['submit'])) {
            $username = $_POST['uname'];
            $password = $_POST['pword'];
            $query = "SELECT * FROM adminlogin WHERE username ='$username' and password='$password' ";
            $login = mysqli_query($connect, $query);
            $isSuccess = mysqli_num_rows($login);
            if ($isSuccess > 0) {
                header('Location: admin.php');
            } else {
                echo 'Incorrect Password!';
            }
        } 
    ?>

    </form> 
    <a href="../homepage.php"><button>Go to Homepage</button></a>
      </div> 
</body>
</html>