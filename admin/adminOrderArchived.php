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
    <title>Completed Orders</title>
</head>
<body>

     <div class="navbar">
            <img src="../images/CSE482ProjectLogo2.jpg" class="logo">
            <ul>
                <li><a href="admin.php">Manage Orders</a></li>
                <li><a href="adminOrderArchived.php">Completed Orders</a></li>
                <li><a href="index.php"><button> Sign Out </button></a></li>

            </ul>
        </div>


    <section>
        <h2 style="text-align: center; padding: 20px;">Completed Orders</h2>

        <div class="container">
            
            <!-- table starts -->
            <table>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Movie</th>
                <th>Row</th>
                <th>Seat No.</th>
                <th>Date of Order</th>
                <th>Time</th>
                <th>Price</th>
              </tr>
              
              <?php 

                    //read query (read sql command) to read all data from users table
                    $query = "SELECT * FROM orderarchive";

                    // Pass the SQL Command to the Database
                    $orders = mysqli_query($connect, $query);

                    // variable for sl no.
                    $i = 1;

                    // Receive all the Data From Users Table using a Loop
                    while ($row = mysqli_fetch_assoc($orders)) {
                        
                        $id             = $row['id'];
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
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $phone; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $movie; ?></td>
                          <td><?php echo $sRow; ?></td>
                          <td><?php echo $seat; ?></td>
                          <td><?php echo $dateorder; ?></td>
                          <td><?php echo $timeShow; ?></td>
                          <td><?php echo $ticPrice; ?></td>
                        </tr>

                    <?php
                    $i++;
                    }

                    ?>

            </table>
            <!-- table ends -->
        </div>
    </section>

    <a href="admin.php"><button>Manage Orders</button></a>

<script type="text/javascript" src="../js/main.js"></script>      
<?php 
ob_end_flush();
 ?>
</body>
</html>