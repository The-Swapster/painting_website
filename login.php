<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
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
    <div id='formhead'>
        <div id='login'><a href="login.php">Login</a></div>
        <div id='sign'><a href="signup.php">Sign-Up</a></div>
    </div>
    <?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['emailid'])) {
        $emailid = stripslashes($_REQUEST['emailid']);
        $emailid = mysqli_real_escape_string($mysqli, $emailid);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        if ($password == null || $password == "" || $emailid == null || $emailid == "") {
            echo "<script>alert('Fill in the blank space')</script>";
        }
        // Check user is exist in the database
        $query    = "SELECT * FROM `login` WHERE `emailid`='$emailid'";
        $result = mysqli_query($mysqli, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['emailid'] = $emailid;
            // Redirect to user dashboard page
            echo "<div id='container'>
                  <h3 class='link'>Successful Login.</h3><br/>
                  <p class='link'>Click here to go to <a href='display.php'>user profile</a></p>
                  </div>";
        } else {
            echo "<div id='container'>
                  <h3 class='link'>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <div id="container">
            <br>
            <form name="login" action="" method="post">
                <table align="center">
                    <tr>
                        <td>Email id:</td>
                        <td><input type="text" name="emailid"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><input id='submit' type="submit" value="Submit"></td>
                        <td>
                            <a href='forgot.php'><button id='forgot' type="button">Forgot Password</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    <?php
    }
    ?>




</body>

</html>