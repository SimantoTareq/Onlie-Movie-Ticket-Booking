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

    <title>Signup</title>

</head>

<body>
        <div class="navbar">
            <img src="images/CSE482ProjectLogo2.jpg" class="logo">
            <ul>
                <li><a href="homepage.php">Movies</a></li>
                <li><a href="nowshowing.php">Now Showing</a></li>
                <li><a href="ticketpage.php">Ticket</a></li>
                <li><a href="theaterlocation.php">Theater Location</a></li>
                <li><a href="userlogin.php">Login</a></li>
            </ul>
        </div>

<h2 style="text-align: center; color: white; padding: 20px;">Register</h2>

<div class="container">

<form name="signup" action="" method="POST" onsubmit="return validateFormSignup()">
  <div class="container">
    
    <p style="margin-bottom: 10px; color: white">Please Fill the Form to create an account.</p>
    <hr>

    <label for="username"><b style="color: white">Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required pattern="[0-9a-zA-Z_.-]*">

    <label for="email"><b style="color: white">Email</b></label>
    <input type="email" placeholder="Enter Email" name="email">

    <label for="password"><b style="color: white">Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <label for="repassword"><b style="color: white">Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repassword">
    
    


    <div class="container" style="background-color:#f1f1f1">
      <a href="homepage.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" id="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>

  </div>
</form>
    <p style="color: white">Already Have an Account?</p>
    <a href="userlogin.php"><button>Login</button></a>


<?php
            if(isset($_POST['submit'])) 
            {
                $username       = $_POST['username'];
                $email          = $_POST['email'];
                $password       = $_POST['password'];
            
               $query = "INSERT INTO usersignup(username, email, password) VALUES('$username', '$email', '$password')"; 

               $success = mysqli_query($connect, $query);

                if ($success)
                {
                    header("Location: userlogin.php");
                    
                }
            } 

        ?>


</div>
        


        

<script type="text/javascript" src="js/mainsignup.js"></script>

<?php 
ob_end_flush();
 ?>
</body>
</html>