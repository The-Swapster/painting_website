<!DOCTYPE html>
<html>

<head>
    <title>Castle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="painting.css">
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
        <?php
        include('session.php');
        $pid = 'P024';
        $sql = "SELECT * from `paintin` where `paintingid` = '$pid'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <h1 style="color: black">Castle</h1>
        <div class="gallery">
            <a target="_blank" href="Images/painting/p24.jpg">
                <img src="Images/painting/p24.jpg">
            </a>
            <div class="desc">Paint ID: P024</div>
        </div>
        <div id='bid'>
            <p>Current Bid: </p>
            <p>₹ <?php echo $row['bid'] ?></p>
        </div>
        <p align="center"><a href="bid.php"><button>Update Bid!</button></a></p>
    </div>

</body>

</html>