<!DOCTYPE html>
<html>

<head>
    <title>Acrylic Paintings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="acrylic.css">
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
        <h1 style="color: black">Acrylic Painting</h1>
        <p style="color: black">
            Acrylic paint is a fast-drying paint made of pigment suspended in acrylic polymer emulsion and plasticizers, silicon oils, defoamers, stabilizers, metal soaps. Acrylic paints are water-soluble, but become water-resistant when dry. Depending on how much the paint is diluted with water, or modified with acrylic gels, mediums, or pastes, the finished acrylic painting can resemble a watercolor, a gouache or an oil painting, or have its own unique characteristics not attainable with other media.</p>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/Acrylic/a1.jpg" style="width:100%">
                <div class="text">P012 - Entryway with flowers 1</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/Acrylic/a2.jpg" style="width:100%">
                <div class="text">P013 - Entryway with flowers 2</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Acrylic/a3.jpg" style="width:100%">
                <div class="text">P014 - Entryway with flowers 3</div>
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
                <a target="_blank" href="painting12.php">
                    <img src="Images/Acrylic/a1.jpg">
                </a>
                <div class="desc">P012 - Entryway with Flowers 1</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting13.php">
                    <img src="Images/Acrylic/a2.jpg">
                </a>
                <div class="desc">P013 - Entryway with Flowers 2</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting14.php">
                    <img src="Images/Acrylic/a3.jpg">
                </a>
                <div class="desc">P014 - Entryway with Flowers 3</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting15.php">
                    <img src="Images/Acrylic/a4.jpg">
                </a>
                <div class="desc">P015 - Confetti</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting16.php">
                    <img src="Images/Acrylic/a5.jpg">
                </a>
                <div class="desc">P016 - Waves</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting17.php">
                    <img src="Images/Acrylic/a6.jpg">
                </a>
                <div class="desc">P017 - Abstract Flow</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting18.php">
                    <img src="Images/Acrylic/a7.jpg">
                </a>
                <div class="desc">P018 - Blue</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting19.php">
                    <img src="Images/Acrylic/a8.jpg">
                </a>
                <div class="desc">P019 - Abstract Fusion</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting20.php">
                    <img src="Images/Acrylic/a9.jpg">
                </a>
                <div class="desc">P020 - Abstract Enigma</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting21.php">
                    <img src="Images/Acrylic/a10.jpg">
                </a>
                <div class="desc">P021 - The Colony</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting22.php">
                    <img src="Images/Acrylic/a11.jpg">
                </a>
                <div class="desc">P022 - Abstract Lightning</div>
            </div>
        </div>
    </div>

</body>

</html>