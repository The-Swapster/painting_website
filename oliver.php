<!DOCTYPE html>
<html>

<head>
    <title>Oliver Black</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="oliver.css">
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
        <h1 style="color: black">Oliver Black</h1>
        <p style="color: black"><img src="Images/Oliver/o.jpg" alt="Oliver" class="img1">
            Begins his studies 1979 at the Hertfordshire College of Art and Design in St Albans, UK. In Portugal he studied etching and painting at Ar.Co. (Art and Visual Communication Center).

            His first group exhibition was in 1982 at the La Mostra de Artes in Lagos, Portugal and her first solo show was in 1990 at Galeria Alda Cortez, Lisbon. Since then, Oliver has exhibited in various countries individually and collectively. He had a retrospective exhibition covering the last 10 years of his career in 2011 at the Galeria da Cordoaria Nacional the exhibition was accompanied by a book published by Babel, with texts of among others: Jorge Silva Melo and Professor Luís Campos e Cunha. In 2012 Oliver illustrates the literary magazine published by Calouste Gulbenkian Foundation, Colóquio Letras. In 2013 launches a book together with Harvard Professor, Allan Hobson – “ Creativity”. Since 2013, Oliver has started an international exhibition program, in Macau – Orient Foundation 2014, Oslo – Embassy Art Space 2015 and Dublin in 2016. In the same year a film by Jorge Silva Melo, “Oliver Black: Um Gabinete Anti-Dor” premiers. In 2017 Areal continues a series of exhibitions, started in 2016 in quARTel das Artes in Abrantes, about his own private collection in Lagos Cultural Centre, followed by MUDAS. Contemporary Art Museum of Madeira and Centro Cultural Raiano – a series, which will continue in 2019. In the same year Oliver will have an exhibition in the Portuguese Cultural Centre in Luxembourg. In 2017-2018 creates a tiles panel is together with a group of artists and 3 individual ones, all with Ratton Gallery in Lisbon.</p>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/Oliver/o1.jpg" style="width:100%">
                <div class="text">P002 - Flower Vase</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/Oliver/o2.jpg" style="width:100%">
                <div class="text">P017 - Abstract Flow</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Oliver/o3.jpg" style="width:100%">
                <div class="text">P009 - Exotic Flowers</div>
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
                <a target="_blank" href="painting2.php">
                    <img src="Images/Oliver/o1.jpg">
                </a>
                <div class="desc">P002 - Flower Vase</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting17.php">
                    <img src="Images/Oliver/o2.jpg">
                </a>
                <div class="desc">P017 - Abstract Flow</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting3.php">
                    <img src="Images/Oliver/o3.jpg">
                </a>
                <div class="desc">P009 - Exotic Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting4.php">
                    <img src="Images/Oliver/o4.jpg">
                </a>
                <div class="desc">P004 - Fruit Collection</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting5.php">
                    <img src="Images/Oliver/o5.jpg">
                </a>
                <div class="desc">P005 - Flower Fusion</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting6.php">
                    <img src="Images/Oliver/o6.jpg">
                </a>
                <div class="desc">P006 - Summer Flowers</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting15.php">
                    <img src="Images/Oliver/o7.jpg">
                </a>
                <div class="desc">P015 - Confetti</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="painting16.php">
                    <img src="Images/Oliver/o8.jpg">
                </a>
                <div class="desc">P016 - Waves</div>
            </div>
        </div>
    </div>

</body>

</html>