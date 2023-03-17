
<?php
require_once('config.php');


// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // retrieve the recipe data from the form
    $recipe_name = $_POST['recipe_name'];
    $recipe_description = $_POST['recipe_description'];
    $recipe_ingredients = $_POST['recipe_ingredients'];
    $recipe_instructions = $_POST['recipe_instructions'];

    // check if the photo has been uploaded
    if (isset($_FILES['recipe_photo']) && $_FILES['recipe_photo']['error'] == 0) {
        $t_name=$_FILES['recipe_photo']['tmp_name'];
        $file_name=$_FILES['recipe_photo']['name'];
        move_uploaded_file($t_name,"./pic/$file_name");
    } else {
        $file_name = '';
    }

    // insert the recipe into the database
    $stmt = $conn->prepare("INSERT INTO recipes (recipe_name, recipe_description, recipe_ingredients, recipe_instructions, recipe_photo) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sssss", $recipe_name, $recipe_description, $recipe_ingredients, $recipe_instructions, $file_name);
    if ($stmt->execute()) {
        echo '<script>alert("Recipe Uploaded Successfully!")</script>';
    } else {
        echo "Error uploading recipe: " . $stmt->error;
    }
    $stmt->close();
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
    <title>Upload Recipe</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // handle the recipe upload form submit
            $('#recipe-form').submit(function(event) {
                event.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]); // use FormData for file uploads
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    success: function(response) {
                        $('#message')."success";
                        form.trigger('reset');
                    }
                });
            });
        });
    </script>
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
    <a href="upload.php">upload</a>
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
</header>
<!--
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

 header section ends -->

<h1 class="upload_tittle">Upload Recipe</h1>
<div class="upload_form">

    <div id="message">
    </div>
    <div class="form_box">
    <form id="recipe-form" method="POST" enctype="multipart/form-data">
        <label for="recipe_name">Recipe Name:</label><br>
        <input type="text" id="recipe_name" name="recipe_name" required><br><br>

        <label for="recipe_description">Recipe Description:</label><br>
        <textarea id="recipe_description" name="recipe_description" rows="4" cols="50" required></textarea><br><br>

        <label for="recipe_ingredients">Ingredients:</label><br>
        <textarea id="recipe_ingredients" name="recipe_ingredients" rows="4" cols="50" required></textarea><br><br>

        <label for="recipe_instructions">Instructions:</label><br>
        <textarea id="recipe_instructions" name="recipe_instructions" rows="4" cols="50" required></textarea><br><br>
        <label for="">photo</label><br>
        <input type="file" name="recipe_photo"><br><br>
        <button class="upload_button" type="submit">Upload Recipe</button>
    </form>
    </div>
</div><br><br>


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

