<!DOCTYPE html>
<html>

<head>
    <title>Watercolor Paintings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="watercolour.css">
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
        <h1 style="color: black">Watercolor Painting</h1>
        <p style="color: black">
            Watercolor is a painting method in which the paints are made of pigments suspended in a water-based solution. Watercolor refers to both the medium and the resulting artwork. Watercolor refers to both the medium and the resulting artwork. Aquarelles painted with water-soluble colored ink instead of modern water colors are called "aquarellum atramento" (Latin for "aquarelle made with ink") by experts. However, this term has been more and more passing out of use.</p>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/Watercolor/w1.jpg" style="width:100%">
                <div class="text">P023 - Water Flow</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/Watercolor/w2.jpg" style="width:100%">
                <div class="text">P024 - Castle</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Watercolor/w3.jpg" style="width:100%">
                <div class="text">P025 - Fusion Flower</div>
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
                <a target="_blank" href="painting23.php">
                    <img src="Images/Watercolor/w1.jpg">
                </a>
                <div class="desc">P023 - Water Flow</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting24.php">
                    <img src="Images/Watercolor/w2.jpg">
                </a>
                <div class="desc">P024 - Castle</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting25.php">
                    <img src="Images/Watercolor/w3.jpg">
                </a>
                <div class="desc">P025 - Fusion Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting26.php">
                    <img src="Images/Watercolor/w4.jpg">
                </a>
                <div class="desc">P026 - Birds</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting27.php">
                    <img src="Images/Watercolor/w5.jpg">
                </a>
                <div class="desc">P027 - Woodpecker</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting28.php">
                    <img src="Images/Watercolor/w6.jpg">
                </a>
                <div class="desc">P028 - Pigeons</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting29.php">
                    <img src="Images/Watercolor/w7.jpg">
                </a>
                <div class="desc">P029 - Sparrows</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting30.php">
                    <img src="Images/Watercolor/w8.jpg">
                </a>
                <div class="desc">P030 - Bird</div>
            </div>
        </div>
    </div>

</body>

</html>