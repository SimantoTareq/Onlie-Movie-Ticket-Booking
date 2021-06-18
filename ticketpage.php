<?php
ob_start();
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index2.css">
    <link href="css/head.css" type="text/css" rel="stylesheet" />

<title>Ticket Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

        <div class="navbar">
            <a href="index.php"><img src="images/CSE482ProjectLogo2.jpg" class="logo"></a>
            <ul>
                <li><a href="nowshowing.php">Now Showing</a></li>
                <li><a href="ticketpage.php">Ticket</a></li>
                <li><a href="theaterlocation.php">Theater Location</a></li>
            </ul>
        </div>

        <h2 style="text-align: center; color: white; padding: 20px;">Enter Purchase Information</h2>


    <div class="container">

        <form name="orderInfo" method="POST" onsubmit="return validateForm()">
      
          <div class="container">

          <p style="margin-bottom: 10px; color: white">Please Enter Ticket Informations.</p>
          <hr>

          <label id="textview" for="name"><b style="color: white">Name: </b></label>
          <input type="text" id="name" name="name" placeholder="Input Your Name..." ><br>


          <label for="phone"><b style="color: white">Phone No: </b></label>
          <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone Number..."><br>


          <label for="email"><b style="color: white">Email: </b></label>
          <input type="email" id="email" name="email" placeholder="Enter Your Email..."><br><br>

          <label for="movie"><b style="color: white">Please Select a Movie: </b></label>
          <select id="movie" name="movie">
            <option value="selectmovie">Select Movie</option>
            <option value="Mortal Combat">Mortal Combat</option>
            <option value="The Father">The Father</option>
            <option value="Minari">Minari</option>
          </select><br><br>
      

          <label for="seats"><b style="color: white">Please Select  Your Seats: </b></label>
          <select id="row" name="row">
            <option value="selectrow">Select Row</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select>
          <select id="seat" name="seat">
            <option value="selectseat">Choose A Seat</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="1">6</option>
            <option value="2">7</option>
            <option value="3">8</option>
            <option value="4">9</option>
            <option value="5">10</option>
        </select><br><br>

        <label for="dateofOrder"><b style="color: white">Select Date: </b></label>
        <input type="date" id="dateorder" name="dateorder"><br><br>

        <label for="timeShow"><b style="color: white">Choose a Time: </b></label>
          <select id="timeShow" name="timeShow">
            <option value="selecttimeShow">Select a Time</option>
            <option value="10.00am">10.00am</option>
            <option value="2.00pm">2.00pm</option>
            <option value="5.00pm">5.00pm</option>
            <option value="8.00pm">8.00pm</option>
          </select><br><br>

          <label for="ticPrice"><b style="color: white">Choose Seat Type: </b></label>
          <select id="ticPrice" name="ticPrice">
            <option value="selectticPrice">Choose Seat Quality</option>
            <option value="500">Premium- 500/-</option>
            <option value="300">Regular- 300/-</option>
            
          </select><br><br>


          <hr>

        <button type="submit" id="submit" name="submit">Confirm</button>
        <a href="nowshowing.php"><button type="button" class="cancelbtn">Cancel</button></a>

        </div>
      

      
          <!-- <input type="submit" id="submit" name="submit" value="Submit"> -->

      
        </form>

        <?php
            if(isset($_POST['submit'])) 
            {
                $name           = $_POST['name'];
                $phone          = $_POST['phone'];
                $email          = $_POST['email'];
                $movie          = $_POST['movie'];
                $sRow           = $_POST['row'];
                $seat           = $_POST['seat'];
                $dateorder      = date('Y-m-d', strtotime($_POST['dateorder']));
                $timeShow       = $_POST['timeShow'];
                $ticPrice       = $_POST['ticPrice'];
               
               $query = "INSERT INTO ticketpage(name, phone, email, movie, row, seat, dateorder, timeShow, ticPrice) VALUES('$name', '$phone', '$email', '$movie', '$sRow','$seat', '$dateorder', '$timeShow', '$ticPrice')"; 

               $ticketPage = mysqli_query($connect, $query);

                if ($ticketPage)
                {
                    header("Location: orderconfirm.php");
                    
                }
            } 

        ?>



      </div>

      

<script type="text/javascript" src="js/main.js"></script>      
<?php 
ob_end_flush();
 ?>
</body>
</html>