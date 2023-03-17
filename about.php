<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
    <h1>about us</h1>
    <p> <a href="home.html">home >></a> about </p>
</div>

<section class="about">

    <div class="image">
        <img src="images/img.jpg" alt="">
    </div>

    <div class="content">
        <span>welcome to our Recipe Ghor</span>
        <h3>We provide different type of delicious recipe item</h3>
        <p> Recipe Ghor is a website that provide users different category of recipe, User learn here different type of recipes, view the recipe any number of times. We provide all recipe step by step and include all ingredients in the recipe.User get recipe description, photos and nutritional information. </p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<section class="gallery">

    <h1 class="title"> our <span>Recipe Item</span> <a href="#">view all recipe >></a> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/lish.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/beef-curry.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/egg.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/sweet.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/fried.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/chingri.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

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
               <!-- <a href="upload.php"> <i class="fas fa-arrow-right"></i> Upload</a> -->
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