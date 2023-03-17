<?php
if (isset($_POST['btn'])) {
    include "config.php";

    $login_sql = "SELECT * FROM `admin` WHERE admin_email='$_POST[email]' and admin_password='$_POST[password]'";

    $result = mysqli_query($conn, $login_sql);
    $final_result = mysqli_fetch_assoc($result);
    if ($final_result) {
        session_start();
        $_SESSION["s_admin_name"] = $final_result['admin_name'];

        header('Location: upload.php');
    } else {
        echo "user or pass error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="home.php" class="logo"> <i class="fas fa-shopping-basket"></i>Recipe Ghor</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="Food Recipe.php">Food Recipe</a>
            <a href="about.php">about</a>
            <a href="Recipe description.php">Recipe description</a>
           <!--  <a href="upload.php">upload</a> -->
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </header>

    <h1 class="login_tittle">Log In</h1>
    <div class="login_form">

        <div class="log_box">
            <form id="login1_form" action="" method="POST">
                <label for="email_name">Email:</label><br>
                <input type="text" placeholder="enter your email" id="email_name" name="email" required><br><br>

                <label for="password">Password:</label><br>
                <input type="password" placeholder="enter password" id="password" name="password" required><br><br>

                <button class="login_button" type="submit" name="btn">Log in</button>
            </form>
        </div>

    </div>
    <br><br><br>
    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-arrow-right"></i> Home</a>
                <a href="Food Recipe.php"> <i class="fas fa-arrow-right"></i> Food Recipe</a>
                <a href="about.php"> <i class="fas fa-arrow-right"></i> About</a>
                <a href="Recipe description.php"> <i class="fas fa-arrow-right"></i> Recipe Description</a>
                <a href="upload.php"> <i class="fas fa-arrow-right"></i> Upload</a>
                <a href="contact.php"> <i class="fas fa-arrow-right"></i> Contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Our Recipe Item </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Our Favourite Item </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our Recipe Description </a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Our account </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> How to view all recipe </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>Subscribe for latest Recipe Iteam</p>
                <form action="">
                    <input type="email" placeholder="enter your email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

    </section>



</body>

</html>