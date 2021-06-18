<?php
ob_start();
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index2.css">
    <link href="css/head.css" type="text/css" rel="stylesheet" />

    <title>Login</title>

</head>

<body>
    
        <div class="navbar">
            <img src="images/CSE482ProjectLogo2.jpg" class="logo">
            <ul>
                <li><a href="homepage.php">Movies</a></li>
                <li><a href="nowshowing.php">Now Showing</a></li>
                <li><a href="ticketpage.php">Ticket</a></li>
                <li><a href="theaterlocation.php">Theater Location</a></li>
                <li><a href="usersignup.php">Sign Up</a></li>
            </ul>
        </div>
    

<h2 style="text-align: center; color: white; padding: 20px;">Login</h2>

<div class="container">
    
    <form action="" method="POST">
  

  <div class="container">
    <p style="margin-bottom: 10px; color: white">Please Login Using Existing Account.</p>
    <hr>

    <label for="username"><b style="color: white">Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b style="color: white">Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" id="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="homepage.php"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

    <p style="color: white">Don't Have an Account?</p>
    <a href="usersignup.php"><button>Sign Up</button></a>

<?php 

  if (isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $query = "SELECT * FROM usersignup WHERE username ='$username' and password='$password' ";
          $login = mysqli_query($connect, $query);
          $isSuccess = mysqli_num_rows($login);
          if ($isSuccess > 0) {
              header('Location: homepage.php');
          } else {
              echo 'Wrong Password, Try Again!';
          }
      } 
?>


</div>


<?php 
ob_end_flush();
 ?>
</body>
</html>