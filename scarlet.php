<!DOCTYPE html>
<html>

<head>
    <title>Scarlet Davies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scarlet.css">
</head>

<body>
    <nav>
        <ul>
            <a href='homepage.php'>
                <div class=lg></div> <img class=logo src='bid1.png'> </div>
            </a>

            <?php
            session_start();
            if (!isset($_SESSION['emailid'])) {
                echo "<li><a href='login.php'><i class='fa fa-user' style='font-size:24px;'></i><br>Login/Sign-Up</a></li>";
            } else {
                echo "<li><a href='display.php'><i class='fa fa-user' style='font-size:24px;'></i><br>User</a></li>";
            }
            ?>
            <li><a href='gallery.php'>Gallery<br><br></a></li>
            <li><a href='bid.php'>Auction<br><br></a></li>
            <li class=" dropdown">
                <a href="artwork.php" class="dropbtn">Artwork<br><i class="arrow down"></i></a>
                <div class="dropdown-content">
                    <a href='oil.php'>Oil Paintings</a>
                    <a href='acrylic.php'>Acrylic Paintings</a>
                    <a href='watercolour.php'>Watercolour Paintings</a>
                </div>
            </li>
            <li class=" dropdown">
                <a href="artist.php" class="dropbtn">Artist<br><i class="arrow down"></i></a>
                <div class="dropdown-content">
                    <a href='oliver.php'>Oliver Black</a>
                    <a href='scarlet.php'>Scarlet Davies</a>
                    <a href='ethan.php'>Ethan Wilson</a>
                </div>
            </li>
            <li><a href='homepage.php'>Home<br><br></a></li>
        </ul>
    </nav>
    <div id="container">
        <h1 style="color: black">Scarlet Davies</h1>
        <p style="color: black"><img src="Images/Scarlet/s.jpg" alt="Scarlet" class="img1">
            An Award winning photographer, Scarlet Davies was born in 1999 in Havana, Cuba, where she still lives and work.
            In her practice, since 2008, Davies specializes in amazingly soulful portraits.<br><br>
            In 2016, Davies was the winner of the Herman Puig Prize, awarded yearly to the best artist in Havana.
            In her powerful series “Abstract portraits”, Davies captures the very essence of each subject in a simple, sensual and compelling way. Davies has an ability to capture the depth of the colors, showing the subject soul and deep thoughts.<br><br>
            In 2019, Uncommon Beauty published a photo-book , HAVANA INTIMATE, through the eyes of Scarlet Davies.
            In a scholarly essay written for the book, Grethel Morell Otero, the recipient of the 2019 Cuban National Curator Award, and a published authority in Cuban photography wrote: “her (Davies) work represents something of a vanguard movement in contemporary artistic painting’.
            <br><br><br><br>
        </p>

        <!-- Slideshow container -->

        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/Scarlet/s1.jpg" style="width:100%">
                <div class="text">P001 - Abstract Rust</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/Scarlet/s2.jpg" style="width:100%">
                <div class="text">P023 - Water Flow</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Scarlet/s3.jpg" style="width:100%">
                <div class="text">P024 - Castle</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
        <div id="grid">
            <div class="gallery">
                <a target="_blank" href="painting1.php">
                    <img src="Images/Scarlet/s1.jpg">
                </a>
                <div class="desc">P001 - Abstract Rust</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting23.php">
                    <img src="Images/Scarlet/s2.jpg">
                </a>
                <div class="desc">P023 - Water Flow</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting24.php">
                    <img src="Images/Scarlet/s3.jpg">
                </a>
                <div class="desc">P024 - Castle</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting7.php">
                    <img src="Images/Scarlet/s4.jpg">
                </a>
                <div class="desc">P007 - Girl picking flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting19.php">
                    <img src="Images/Scarlet/s5.jpg">
                </a>
                <div class="desc">P019 - Abstract Fusion</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting20.php">
                    <img src="Images/Scarlet/s6.jpg">
                </a>
                <div class="desc">P020 - Abstract Enigma</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting21.php">
                    <img src="Images/Scarlet/s7.jpg">
                </a>
                <div class="desc">P021 - The Colony</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting22.php">
                    <img src="Images/Scarlet/s8.jpg">
                </a>
                <div class="desc">P022 - Abstract Lightning</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting11.php">
                    <img src="Images/Scarlet/s9.jpg">
                </a>
                <div class="desc">P011 - Storm</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting18.php">
                    <img src="Images/Scarlet/s10.jpg">
                </a>
                <div class="desc">P018 - Blue</div>
            </div>
        </div>
    </div>

</body>

</html>