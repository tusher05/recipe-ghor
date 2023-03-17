<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

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
       <!-- <a href="upload.php">upload</a> -->
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

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/cart-1.jpg" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/cart-2.jpg" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/cart-3.jpg" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <h3 class="total"> total : <span>56.97</span> </h3>
        <a href="#" class="btn">checkout cart</a>
    </div>

    <form action="" class="login-form">
        <h3>login form</h3>
        <input type="email" placeholder="enter your email" class="box">
        <input type="password" placeholder="enter your password" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>

</header>

<!-- header section ends -->

<div class="heading">
    <h1>contact us</h1>
    <p> <a href="home.html">home >></a> contact </p>
</div>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>01718689154</p>
            <p>01705968826</p>
            <p>01917868915</p>
            <p>01805967896</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>1802044@icte.bdu.ac.bd</p>
            <p>1802039@icte.bdu.ac.bd</p>
            <p>1802041@icte.bdu.ac.bd</p>
            <p>1802005@icte.bdu.ac.bd</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Kaliakor,Gazipur,Dhaka,Bangladesh</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <h3>get update Recipes</h3>
            <div class="inputBox">
                <input type="text" placeholder="enter your name" class="box">
                <input type="email" placeholder="enter your email" class="box">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="enter your number" class="box">
                <input type="text" placeholder="enter your subject" class="box">
            </div>
            <textarea placeholder="your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </div>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

    <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-arrow-right"></i> Home</a>
                <a href="Food Recipe.php"> <i class="fas fa-arrow-right"></i> Food Recipe</a>
                <a href="about.php"> <i class="fas fa-arrow-right"></i> About</a>
                <a href="Recipe description.php"> <i class="fas fa-arrow-right"></i> Recipe Description</a>
              <!--  <a href="upload.php"> <i class="fas fa-arrow-right"></i> Upload</a> -->
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
            <a href="https://www.facebook.com/rakibakhanom.jisa"> <i class="fab fa-facebook-f"></i> facebook </a>
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

<!-- footer section ends -->

<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>