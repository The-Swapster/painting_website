<!DOCTYPE html>
<html>

<head>
    <title>Ethan Wilson</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ethan.css">
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
        <h1 style="color: black">Ethan Wilson</h1>
        <p style="color: black"><img src="Images/Ethan/e.jpg" alt="Ethan" class="img1">
            Born in Sydney in 1972, Wilson completed a Bachelor of Visual Arts (Honours) in 1994 and went on to obtain a Masters in Visual Arts at the University of Western Sydney in 1998. Ethan Wilson has exhibited consistently for the past twelve years both nationally and internationally.<br>
            Wilson has won several major art prizes including the Australian Cricket Art Prize in 2011 for the painting “Cricket at Kandahar”. The Oakhill Grammer School Art Prize in 2013 as well as being selected as a semi-finalist for the prestigious Doug Moran Portrait Prize.<br>
            Complex and contradictory, Wilson’s recent nature paintings seek to expose a delicate equilibrium between a sense of balance and visual calm and the tumult of painterly texture and surface tension. The play of light at the waters edge.</p>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/Ethan/e1.jpg" style="width:100%">
                <div class="text">P012 - Entryway with Flowers 1</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/Ethan/e2.jpg" style="width:100%">
                <div class="text">P013 - Entryway with Flowers 2</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Ethan/e3.jpg" style="width:100%">
                <div class="text">P014 - Entryway with Flowers 3</div>
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
                    <img src="Images/Ethan/e1.jpg">
                </a>
                <div class="desc">P012 - Entryway with Flowers 1</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting13.php">
                    <img src="Images/Ethan/e2.jpg">
                </a>
                <div class="desc">P013 - Entryway with Flowers 2</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting14.php">
                    <img src="Images/Ethan/e3.jpg">
                </a>
                <div class="desc">P014 - Entryway with Flowers 3</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting25.php">
                    <img src="Images/Ethan/e4.jpg">
                </a>
                <div class="desc">P025 - Fusion Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting8.php">
                    <img src="Images/Ethan/e5.jpg">
                </a>
                <div class="desc">P008 - Potpourri</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting3.php">
                    <img src="Images/Ethan/e6.jpg">
                </a>
                <div class="desc">P009 - Exotic Flowers </div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting26.php">
                    <img src="Images/Ethan/e7.jpg">
                </a>
                <div class="desc">P026 - Birds</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting27.php">
                    <img src="Images/Ethan/e8.jpg">
                </a>
                <div class="desc">P027 - Woodpecker</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting28.php">
                    <img src="Images/Ethan/e9.jpg">
                </a>
                <div class="desc">P028 - Pigeons</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting29.php">
                    <img src="Images/Ethan/e10.jpg">
                </a>
                <div class="desc">P029 - Sparrows</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting30.php">
                    <img src="Images/Ethan/e11.jpg">
                </a>
                <div class="desc">P030 - Bird</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting10.php">
                    <img src="Images/Ethan/e12.jpg">
                </a>
                <div class="desc">P010 - Flowers oil painting</div>
            </div>
        </div>
    </div>

</body>

</html>