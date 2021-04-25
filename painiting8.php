<!DOCTYPE html>
<html>

<head>
    <title>Artist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="painting.css">
</head>

<body>
    <nav>
        <ul>
            <a href=#>
                <div class=lg></div> <img class=logo src='bid1.png'> </div>
            </a>

            <li><a href="login.php"><i class="fa fa-user" style="font-size:24px;"></i><br>Login/Sign-Up</a></li>
            <li><a href=#>Gallery<br><br></a></li>
            <li><a href=#>Auction<br><br></a></li>
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
            <li><a href=#>Home<br><br></a></li>
        </ul>
    </nav>
    <div id="container">
        <h1 style="color: black">Fruit Collection</h1>
        <div class="gallery">
            <a target="_blank" href="Images/painting/p8.jpg">
                <img src="Images/painting/p8.jpg">
            </a>
            <div class="desc">Flower Fusion</div>
        </div>
        <div id='bid'>
            <p>Current Bid: </p>
            <p>This would hold the bid amount</p>
        </div>
        <p align="center"><a href=""><button>Update Bid!</button></a></p>
    </div>

</body>

</html>