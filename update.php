<?php
include "connection.php";
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="update.css">
    <title>Update</title>
    <script>
        function validateform() {
            var fname = document.signup.firstname.value;
            var lname = document.signup.lastname.value;
            var password = document.signup.password.value;
            var rpassword = document.signup.rpassword.value;
            var emailid = document.signup.emailid.value;
            var sex = document.signup.sex.value;
            var phoneno = document.signup.phoneno.value;
            var artists = document.getElementById("artists").value;
            var address = document.signup.address.value;
            var dob = document.signup.dob.value;
            var type = document.signup.type.value;

            if (fname == null || fname == "" || lame == null || lname == "" || password == null || password == "" || rpassword == null || rpassword == "" || emailid == null || emailid == "" || dob == null || dob == "" || sex == null || sex == "" || phoneno == null || phoneno == "" || address == null || address == "" || artists == null || artists == "" || type == null || type == "") {
                alert("Fill in the blank space");
            }
            if (password.lenght < 6) {
                alert("Password must be at least 6 characters long.")
            } else if (password != rpassword) {
                alert("Password is not same.");
            }
            if (phoneno.lenght == 10) {
                alert("Phone number should be of 10 numbers");
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
    require('connection.php');
    include('session.php');
    $email = $_SESSION['emailid'];
    $sql = "SELECT * from `user` where `emailid` = '$email'";
    $result1 = $mysqli->query($sql);
    $row = $result1->fetch_assoc();
    // When form submitted, insert values into the database.
    $firstname   = stripslashes($_REQUEST['firstname']);
    $firstname   = mysqli_real_escape_string($mysqli, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($mysqli, $lastname);
    $dob = stripslashes($_REQUEST['dob']);
    $dob = mysqli_real_escape_string($mysqli, $dob);
    $sex = stripslashes($_REQUEST['sex']);
    $sex = mysqli_real_escape_string($mysqli, $sex);
    $phoneno = stripslashes($_REQUEST['phoneno']);
    $phoneno = mysqli_real_escape_string($mysqli, $phoneno);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($mysqli, $address);
    $artists = stripslashes($_REQUEST['artists']);
    $artists = mysqli_real_escape_string($mysqli, $artists);
    $type = stripslashes($_REQUEST['type']);
    $type = mysqli_real_escape_string($mysqli, $type);
    if ($firstnamename == null || $firstnamename == "" || $lastnameame == null || $lastnamename == "" || $dob == null || $dob == "" || $sex == null || $sex == "" || $phoneno == null || $phoneno == "" || $address == null || $address == "" || $artists == null || $artists == "" || $type == null || $type == "") {
        echo "<script>alert('Fill in the blank space')</script>";
    }
    if (strlen($password) < 6) {
        echo "<script>alert('Password must be at least 6 characters long.')</script>";
    } else if ($password != $rpassword) {
        echo "<script>alert('Password is not same.')</script>";
    }
    if (strlen($phoneno) != 10) {
        echo "<script>alert('Phone number should be of 10 numbers')</script>";
    }
    $query    = "UPDATE `user` SET `firstname`='$firstname', `lastname`='$lastname', `dateofbirth`='$dob', `sex`='$sex', `phoneno`='$phoneno', `address`='$address', `artist`='$artists', `type`='$type'
                 WHERE `emailid`='$email'";
    $result   = mysqli_query($mysqli, $query);
    if ($result == TRUE) {
        echo "<div id='container'>
              <h3 class='link'>Update successful.</h3><br/>
              <p class='link'>Click here to see <a href='display.php'>details</a></p>
              </div>";
    } else {
        echo '';
    }
    ?>
    <div id="container">
        <form class="form" action="" method="post" onsubmit="return validateform()">
            <table align="center">
                <tr>
                    <td colspan=2 align=center><b>Update Details</b></td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname" value='<?php echo $row['firstname'] ?>'></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname" value='<?php echo $row['lastname'] ?>'></td>
                </tr>
                <tr>
                    <td>Email id:</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" value='<?php echo $row['dateofbirth'] ?>'></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="text" name="sex" value='<?php echo $row['sex'] ?>'></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="tel" name="phoneno" value='<?php echo $row['phoneno'] ?>'></td>
                </tr>
                <tr rowspan=2>
                    <td>Address:</td>
                    <td><input type="textarea" name="address" value='<?php echo $row['address'] ?>'></td>
                </tr>
                <tr>
                    <td>Preferred Artist:</td>
                    <td>
                        <input type="text" name="artists" value='<?php echo $row['artist'] ?>'>
                    </td>
                </tr>
                <tr>
                    <td>Painting:</td>
                    <td>
                        <input type="text" name="type" value='<?php echo $row['type'] ?>'>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 align=center><input id="submit" type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>