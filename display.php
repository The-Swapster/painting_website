<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="display.css">
    <title>User Details</title>
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
        $email = $_SESSION['emailid'];
        $sql = "SELECT * from `user` where `emailid` = '$email'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <table align="center">
            <tr>
                <td colspan=2 align=center><b>User Details</b></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td>
                    <?php echo $row['firstname']; ?>
                </td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>
                    <?php echo $row['lastname']; ?>
                </td>
            </tr>
            <tr>
                <td> Email ID:</td>
                <td>
                    <?php echo $row['emailid']; ?>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>
                    <?php echo $row['dateofbirth']; ?>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <?php echo $row['sex']; ?>
                </td>
            </tr>
            <tr>
                <td> Phone Number:</td>
                <td>
                    <?php echo $row['phoneno']; ?>
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <?php echo $row['address']; ?>
                </td>
            </tr>
            <tr>
                <td> Artist Prefered:</td>
                <td>
                    <?php echo $row['artist']; ?>
                </td>
            </tr>
            <tr>
                <td> Painting Type:</td>
                <td>
                    <?php echo $row['type']; ?>
                </td>
            </tr>
            <tr>
                <td><a href='update.php'><button id='submit'>Update Details</button></a></td>
                <td><a href='delete.php'><button id='submit'>Delete Account</button></a></td>
            </tr>
            <tr>
                <td colspan=2 align=center>
                    <a href='mybids.php'><button id='submit'>My Bids</button></a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align=center>
                    <a href='logout.php'><button id='submit'>Logout</button></a>
                </td>
            </tr>
    </div>

</body>

</html>