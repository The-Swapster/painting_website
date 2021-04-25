<!DOCTYPE html>
<html>

<head>
    <title>Oil Paintings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="oil.css">
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
        <h1 style="color: black">Oil Painting</h1>
        <p style="color: black">
            Oil painting is the process of painting with pigments with a medium of drying oil as the binder. Commonly used drying oils include linseed oil, poppy seed oil, walnut oil, and safflower oil. The choice of oil imparts a range of properties to the oil paint, such as the amount of yellowing or drying time. Certain differences, depending on the oil, are also visible in the sheen of the paints. An artist might use several different oils in the same painting depending on specific pigments and effects desired. The paints themselves also develop a particular consistency depending on the medium. </p>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/Oil/1.jpg" style="width:100%">
                <div class="text">P001 - Abstract Rust</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/Oil/2.jpg" style="width:100%">
                <div class="text">P002 - Flower Vase</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Oil/3.jpg" style="width:100%">
                <div class="text">P003 - Exotic Flowers</div>
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
                    <img src="Images/Oil/1.jpg">
                </a>
                <div class="desc">P001 - Abstract Rust</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting2.php">
                    <img src="Images/Oil/2.jpg">
                </a>
                <div class="desc">P002 - Flower Vase</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting3.php">
                    <img src="Images/Oil/3.jpg">
                </a>
                <div class="desc">P003 - Exotic Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting4.php">
                    <img src="Images/Oil/4.jpg">
                </a>
                <div class="desc">P004 - Fruit Collection</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting5.php">
                    <img src="Images/Oil/5.jpg">
                </a>
                <div class="desc">P005 - Flower Fusion</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting6.php">
                    <img src="Images/Oil/6.jpg">
                </a>
                <div class="desc">P006 - Summer Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting7.php">
                    <img src="Images/Oil/7.jpg">
                </a>
                <div class="desc">P007 - Girl picking flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting8.php">
                    <img src="Images/Oil/8.jpg">
                </a>
                <div class="desc">P008 - Potpourri</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting9.php">
                    <img src="Images/Oil/9.jpg">
                </a>
                <div class="desc">P009 - Exotic Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting10.php">
                    <img src="Images/Oil/10.jpg">
                </a>
                <div class="desc">P010 - Flowers Oil Painting</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting11.php">
                    <img src="Images/Oil/11.jpg">
                </a>
                <div class="desc">P011 - Storm</div>
            </div>
        </div>
    </div>

</body>

</html>