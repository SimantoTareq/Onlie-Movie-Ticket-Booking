<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index2.css">
    <link href="css/CommonCSS.css" type="text/css" rel="stylesheet" />
    <link href="css/MoviesCSS.css" type="text/css" rel="stylesheet" />
    <link href="css/head1.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="css/index2.css">
    <link href="css/head.css" type="text/css" rel="stylesheet" />


    <title>Document</title>

</head>

<body>


    <div class="navbar">
        <a href="homepage.php"><img src="images/CSE482ProjectLogo2.jpg" class="logo"></a>
        <ul>
            <li><a href="homepage.php">Movies</a></li>
            <li><a href="nowshowing.php">Now Showing</a></li>
            <li><a href="ticketpage.php">Ticket</a></li>
            <li><a href="theaterlocation.php">Theater Location</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>
    </div>

    <p class="Heading1">Top Movies</p>
    <p class="Heading2">Now Showing</p>



    <div class="Movies1">
        <figure>
            <img title="Mortal Kombat" src="images/mortal kombat.jpg" alt="Mortal Kombat Movie Poster" class="SizeofMoviePoster">
            <figcaption>
                <h3 class="Heading3"><a target="_blank" href="https://www.youtube.com/watch?v=NYH2sLid0Zc">Mortal Kombat</a></h3>
                <ul>
                    <li><span class="SmallHeading">Director - </span>Simon McQuiod</li>
                    <li><span class="SmallHeading">Stars - </span>Lewis Tan, Jessica McNamee, Josh Lawson </li>
                    <li>MMA fighter Cole Young seeks out Earth's greatest
                        champions in order to stand against the enemies of
                        Outworld in a high stakes battle for the universe.</li>
                </ul>
            </figcaption>
        </figure>
        <figure>
            <img title="The Father" src="images/The Father.jpg" alt="The Father Movie Poster" class="SizeofMoviePoster">
            <figcaption>
                <h3 class="Heading3"><a target="_blank" href="https://www.youtube.com/watch?v=4TZb7YfK-JI">The Father</a></h3>
                <ul>
                    <li><span class="SmallHeading">Director - </span>Florian Zeller</li>
                    <li><span class="SmallHeading">Stars - </span>Anthony Hopkins, Olivia Colman, Mark Gatiss </li>
                    <li>A man refuses all assistance from his daughter as he ages.
                        As he tries to make sense of his changing circumstances</li>
                </ul>
            </figcaption>
        </figure>
        <figure>
            <img title="Minari" src="images/minari.jpg" alt="Minari Movie Poster" class="SizeofMoviePoster">
            <figcaption>
                <h3 class="Heading3"><a target="_blank" href="https://www.youtube.com/watch?v=STf5DKUkIsU">Minari</a></h3>
                <ul>
                    <li><span class="SmallHeading">Director - </span>Lee Isaac Chung</li>
                    <li><span class="SmallHeading">Stars - </span>Steven Yeun, Yeri Han, Alan S. Kim</li>
                    <li>A Korean family starts a farm in 1980s Arkansas. </li>
                </ul>
            </figcaption>
        </figure>
    </div>

    <div class="up">
        <p class="Heading2">Upcoming</p>

        <div class="Movies2">

            <figure>
                <img title="Venom 2" src="images/venom 2.jpg" alt="Venom 2 Movie Poster" class="SizeofMoviePoster">
                <figcaption>
                    <h3 onclick="ChangeVideo(3)"><a target="_blank" href="https://www.youtube.com/watch?v=-ezfi6FQ8Ds">Venom 2</a></h3>
                    <ul>
                        <li><span class="SmallHeading">Director - </span>Andy Serkis</li>
                        <li><span class="SmallHeading">Stars - </span>Tom Hardy, Michelle Williams, Stephen Graham</li>
                        <li>Sequel to the 2018 film 'Venom'. </li>
                        <li><span class="SmallHeading">Release Date- </span> 24 September 2021</li>
                    </ul>
                </figcaption>
            </figure>
            <figure>
                <img title="Suicide Squad 2" src="images/suicide squad 2.jpeg" alt="Suicide Squad 2 Movie Poster" class="SizeofMoviePoster">
                <figcaption>
                    <h3 onclick="ChangeVideo(4)"><a target="_blank" href="https://www.youtube.com/watch?v=vBumm7mYT_0">Suicide Squad</a></h3>
                    <ul>
                        <li><span class="SmallHeading">Director - </span>James Gunn</li>
                        <li><span class="SmallHeading">Stars - </span>Margot Robbie, Idris Elba, John Cena</li>
                        <li>Supervillains Harley Quinn, Bloodsport,
                            Peacemaker and a collection of nutty cons at Belle Reve prison join the super-secret,
                            super-shady Task Force X as they are dropped off at the remote,
                            enemy-infused island of Corto Maltese.</li>
                        <li><span class="SmallHeading">Release Date- </span> 06 August 2021</li>
                    </ul>
                </figcaption>
            </figure>
            <figure>
                <img title="Jungle Cruise" src="images/jungle cruse.webp" alt="Jungle Cruise Movie Poster" class="SizeofMoviePoster">
                <figcaption>
                    <h3 onclick="ChangeVideo(10)"><a target="_blank" href="https://www.youtube.com/watch?v=f_HvoipFcA8">Jungle Cruise</a></h3>
                    <ul>
                        <li><span class="SmallHeading">Director - </span>Jaume Collet-Serra</li>
                        <li><span class="SmallHeading">Stars - </span>JDwayne Johnson, Emily Blunt, Edgar Ramírez</li>
                        <li>Based on Disneyland's theme park ride where a small riverboat takes
                            a group of travelers through a jungle filled with
                            dangerous animals and reptiles but with a supernatural element.</li>
                        <li><span class="SmallHeading">Release Date- </span> 30 July 2021</li>
                    </ul>
                </figcaption>
            </figure>
        </div>
    </div>
    </div>




</body>
<footer>
    <p>Author: Breaking Coders</p>
    <p><a href="mailto:kazi.moahhed@northsouth.edu">Kazi Ruhol Kabir Moahhed</a></p>
    <p><a href="mailto:tareq.hossain@northsouth.edu">Md Tareq Hossain</a></p>
    <p><a href="mailto:emamul.hassan@northsouth.edu">Emamul Hassan</a></p>
</footer>



<script src="../JavaScript/Index.js"></script>




</html>