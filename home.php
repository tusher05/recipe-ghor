<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="home.php" class="logo"> <i class="fas fa-shopping-basket"></i> Recipe Ghor </a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="Food Recipe.php">Food Recipe</a>
            <a href="about.php">about</a>
            <a href="Recipe description.php">Recipe description</a>
            <!-- <a href="upload.php">upload</a> -->
            <a href="contact.php">contact</a>
            <a href="login.php">Log in</a>
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
        
        
      

    </header>

    <!-- header section ends -->

    <section class="home">

        <div class="slides-container">

            <div class="slide active">
                <div class="content">
                    <span>Welcome to Our Recipe Website</span>
                    <h3>Learn to cook our recipes at home, eat well and feed others well</h3>
                    <a href="#" class="btn">View our recipe</a>
                </div>
                <div class="image">
                    <img src="images/slider.png" alt="">
                </div>
            </div>

            <div class="slide">
                <div class="content">
                    <span>Welcome to Our Recipe Website</span>
                    <h3>A Recipe is a story that ends withs a Good meal</h3>
                    <a href="#" class="btn">View our recipe</a>
                </div>
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
            </div>

            <div class="slide">
                <div class="content">
                    <span>Welcome to Our Recipe Website</span>
                    <h3>A Recipe is a story that ends withs a Good meal</h3>
                    <a href="#" class="btn">View our recipe</a>
                </div>
                <div class="image">
                    <img src="image/home-img-3.png" alt="">
                </div>
            </div>

        </div>


    </section>

    <section class="banner-container">

        <div class="banner">
            <img src="images/beef.png" alt="">
            <div class="content">
                <span>Beef Recipes</span> <br><br><br><br><br><br><br><br><br><br><br>
               
                <a href="#" class="btn">View our recipe</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/delicious.png" alt="">
            <div class="content">
                <span>Egg & Fish vegetable</span><br><br><br><br><br><br><br><br><br><br><br>
                
                <a href="#" class="btn">View our recipe</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/chicken.png" alt="">
            <div class="content">
                <span>Chicken Shashlik Recipe</span><br><br><br><br><br><br><br><br><br><br><br>
                
                <a href="#" class="btn">View our recipe</a>
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
                <a href="about.php"> <i class="fas fa-arrow-right"></i> Our Recipe Item </a>
                <a href="Food Recipe.php"> <i class="fas fa-arrow-right"></i> Our Favourite Item </a>
                <a href="Recipe description.php"> <i class="fas fa-arrow-right"></i> our Recipe Description </a>
                <a href="contact.php"> <i class="fas fa-arrow-right"></i>Our account </a>
                <a href="Food Recipe.php"> <i class="fas fa-arrow-right"></i> How to view all recipe </a>
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



    <!-- footer section ends -->













    <!-- custom css file link  -->
    <script src="js/script.js"></script>

</body>

</html>