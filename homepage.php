<?php
include "connection.php";
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="homepage.css">
    <title>Home Page</title>
</head>

<body>

    <body>
        <nav style="margin:0px;">
            <ul>
                <a href='homepage.php'>
                    <div class=lg></div> <img class=logo src='bid1.png'> </div>
                </a>

                
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
        <div class="container">
            <img src="Images/b1.jpg" alt="Gallery" style="width:100%">
            <div class="top-left">
                <h1>Bid From Home</h1>
                <h2>Browse our latest 2020 collection
                    <br>right from the comfort of your home.</h2>
                <a href="login.php" class="button">Login</a>
                <a href="signup.php" class="button">Sign-up</a>
            </div>
        </div>
        <h1 style="color: black; text-align: center;">We provide a range of paint media<br>
            to choose from. Take your pick!</h1>
        <img src="Images/b3.jpg" alt="Gallery" style="width:100%">
        <h1 style="color: black; text-align: center;">Step into the enchanting world of Art</h1>
        <img src="Images/b2.jpg" alt="Gallery" style="width:100%">
    </body>