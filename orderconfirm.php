<?php
ob_start();
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index2.css">
  <link rel="stylesheet" href="css/adminstyle.css">
    <link href="css/head.css" type="text/css" rel="stylesheet" />
  <title>Thank You.</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="navbar">
            <img src="images/CSE482ProjectLogo2.jpg" class="logo">
            <ul>
                <li><a href="nowshowing.php">Now Showing</a></li>
                <li><a href="ticketpage.php">Ticket</a></li>
                <li><a href="theaterlocation.php">Theater Location</a></li>
            </ul>
        </div>

		<div class="container">

			<h2 style="color: white">Your Order has Been Confirmed. Send the Following Amount to the Number below via BKash.</h2>
      <h2 style="color: white"><img src="images/bkash.png" alt="bkash">Bkash No: 01987654321</h2>

      <h2 style="color: white">Order Details: </h2>

      <!-- table starts -->
            <table>
              <tr>
                <!-- <th>No.</th> -->
                <th style="color: white">Name</th>
                <th style="color: white">Phone Number</th>
                <th style="color: white">Email</th>
                <th style="color: white">Movie</th>
                <th style="color: white">Row</th>
                <th style="color: white">Seat No.</th>
                <th style="color: white">Date of Order</th>
                <th style="color: white">Time</th>
                <th style="color: white">Price</th>
              </tr>
              
              <?php 

                    //read query (read sql command) to read all data from users table
                    $query = "SELECT * FROM ticketpage ORDER BY ID DESC LIMIT 1";
                    // Pass the SQL Command to the Database
                    $orders = mysqli_query($connect, $query);

                    // variable for sl no.
                    // $i = 1;

                    // Receive all the Data From Users Table using a Loop
                    while ($row = mysqli_fetch_assoc($orders)) {
                        
                        // $id             = $row['id'];
                        $name           = $row['name'];
                        $phone          = $row['phone'];
                        $email          = $row['email'];
                        $movie          = $row['movie'];
                        $seat           = $row['seat'];
                        $dateorder      = $row['dateorder'];
                        $timeShow       = $row['timeShow'];
                        $ticPrice       = $row['ticPrice'];
                        $sRow           = $row['row'];


                        ?>
                        <tr>
                          <!-- <th scope="row"><?php echo $i; ?></th> -->
                          <td style="color: white"><?php echo $name; ?></td>
                          <td style="color: white"><?php echo $phone; ?></td>
                          <td style="color: white"><?php echo $email; ?></td>
                          <td style="color: white"><?php echo $movie; ?></td>
                          <td style="color: white"><?php echo $sRow; ?></td>
                          <td style="color: white"><?php echo $seat; ?></td>
                          <td style="color: white"><?php echo $dateorder; ?></td>
                          <td style="color: white"><?php echo $timeShow; ?></td>
                          <td style="color: white"><?php echo $ticPrice; ?></td>
                        </tr>

                    <?php
                    // $i++;
                    }

                    ?>

            </table>
            <!-- table ends -->

			<form name="otpconfirm" method="POST" > 


				<label for="otp"><b style="color: white">Enter TrxID: </b></label>
          		<input type="int" id="otp" name="otp" placeholder="Enter the transaction id..."><br>

			</form>
		
        	<button type="submit" name="submit" onclick="validateFormotp()">Submit</button>

		</div>

<script type="text/javascript" src="js/mainotp.js"></script>  
<?php 
ob_end_flush();
 ?>
</body>
</html>