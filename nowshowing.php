<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Now Showing</title>
    <link href="css/CommonCSS.css" type="text/css" rel="stylesheet" />
    <link href="css/NowShowingCSS.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="css/index2.css">
    <link href="css/head.css" type="text/css" rel="stylesheet" />
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

    <div>
    <form action="ticketpage.php" method=post class="form">
    <img title="Mortal Kombat" src="images/mortal kombat.jpg" alt="Mortal Kombat Poster" id="mortalcombat">
    <fieldset>
        <legend>Mortal Kombat</legend>
        <p style = "color:white">MMA fighter Cole Young seeks out Earth's
            greatest champions in order to stand against the enemies of
            Outworld.</p>
            <iframe width="400" height="200"
                src="https://www.youtube.com/embed/NYH2sLid0Zc">
            </iframe> 
        <input type="submit" name="BuyTicket" value="Buy Ticket" onclick="MovieData(1)">
    </fieldset>
     
     
    <img title="The Father" src="images/The father.jpg" alt="The Father Movie Poster" id="thefather">
    <fieldset>
        <legend>The Father</legend>
        <p style = "color:white">A man refuses all assistance from his daughter as he ages.
            As he tries to make sense of his changing.</p>
            <iframe width="400" height="200"
                src="https://www.youtube.com/embed/4TZb7YfK-JI">
            </iframe> 
        <input type="submit" name="BuyTicket" value="Buy Ticket" onclick="MovieData(2)">
    </fieldset>
    
    <img title="Minari" src="images/Minari.jpg" alt="Minari Poster" id="minari">
    <fieldset>
        <legend font-size:2px>Minari</legend>
        <p style = "color:white">A Korean family starts a farm in 1980s Arkansas, United States.In search of its own American dream.</p>
            <iframe width="400" height="200"
                src="https://www.youtube.com/embed/STf5DKUkIsU">
            </iframe> 
       <a href="ticketpage.php"><input type="submit" name="BuyTicket" value="Buy Ticket" onclick="MovieData(3)"></a>
    </fieldset>
    
</form>


</div>



    <footer>
        <p>Author: Breaking Coders</p>
        <p><a href="mailto:kazi.moahhed@northsouth.edu">Kazi Ruhol Kabir Moahhed</a></p>
        <p><a href="mailto:tareq.hossain@northsouth.edu">Md Tareq Hossain</a></p>
        <p><a href="mailto:emamul.hassan@northsouth.edu">Emamul Hassan</a></p>
    </footer>


</body>

</html>


