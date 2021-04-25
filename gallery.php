<!DOCTYPE html>
<html>

<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="gallery.css">
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
        <h1 align='center' style="color: black">Gallery</h1>
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