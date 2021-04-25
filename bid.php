<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bid.css">
    <title>Auction</title>
    <script>
        function validateform() {
            var id = document.bid.paintingid.value;
            var bid = document.bid.bid.value;

            if (id == null || id == "" || bid == null || bid == "") {
                alert("Fill in the blank space");
            }
            if (id.lenght == 4) {
                alert("Painting id is of length 4")
            } else if (bid % 1000 != 0) {
                alert("Bid can be raised only by 1000.");
            }
        }
    </script>
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
    <?php
    include('session.php');
    // When form submitted, check and create user session.
    if (isset($_POST['paintingid'])) {
        $email = $_SESSION['emailid'];
        $paintingid = stripslashes($_REQUEST['paintingid']);
        $paintingid = mysqli_real_escape_string($mysqli, $paintingid);
        $bid = stripslashes($_REQUEST['bid']);
        $bid = mysqli_real_escape_string($mysqli, $bid);
        if ($paintingid == null || $paintingid == "" || $bid == null || $bid == "") {
            echo "<script>alert('Fill in the blank space')</script>";
        } else if (strlen($paintingid) != 4) {
            echo "<script>alert('Painting ID must be 4 characters long.')</script>";
        } else if ($bid % 1000 != 0) {
            echo "<script>alert('Bid Must be in the multiple of 1000')</script>";
        } else {
            // Check user is exist in the database
            $query    = "UPDATE `paintin` SET `bid`='$bid', `emailid`='$email' WHERE `paintingid`='$paintingid'";
            $result = mysqli_query($mysqli, $query);
            if ($result) {
                // Redirect to user dashboard page
                echo "<div id='container'>
                  <h3 class='link'>Update Successful.</h3><br/>
                  <p class='link'>Click here to <a href='bid.php'>bid</a> again.</p>
                  </div>";
            } else {
                echo "<div id='container'>
                  <h3 class='link'>Incorrect Painting ID.</h3><br/>
                  <p class='link'>Click here to <a href='bid.php'>enter</a> again.</p>
                  </div>";
            }
        }
    } else {
    ?>
        <div id="container">
            <br>
            <form name="bid" action="" method="post" onsubmit="return validate()">
                <table align="center">
                    <tr>
                        <td colspan=2 align='center'>Update Bid</td>
                    </tr>
                    <tr>
                        <td>Painting ID:</td>
                        <td><input type="text" name="paintingid"></td>
                    </tr>
                    <tr>
                        <td>Bid:</td>
                        <td><input type="text" name="bid"></td>
                    </tr>
                    <tr>
                        <td colspan=2 align='center'><input id='submit' type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    <?php
    }
    ?>
</body>

</html>