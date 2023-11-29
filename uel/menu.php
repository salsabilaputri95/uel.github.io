<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- Link father icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Link style -->
    <link rel="stylesheet" href="css/menu.css" />
    <title>Menu</title>
  </head>
  <body>
    <!-- Navbar start -->
    <header>
      <a href="index.php" class="logo"><i class="fas fa-utensils"></i>UEL</a>

      <nav class="navbar">
        <a class="active" href="../index.php">Home</a>
        <a href="#makanan">Makanan</a>
        <a href="#minuman">Minuman</a>
        <a href="#desserts">Desserts</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
      </div>

      <form action="" id="search-form">
        <input
          type="search"
          placeholder="search here..."
          name=""
          id="search-box"
        />
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
      </form>
    </header>
    <!-- Navbar end -->

    <section>
      <div class="home">
        <div class="content">
          <h3>Jelajahi Kelezatan Makanan, Minuman, dan Dessert Kami</h3>
        </div>
        <div class="image">
          <img src="img/bg/bg6.jpg" alt="" />
        </div>
      </div>
    </section>
    <!-- Menu start -->
    <section class="menu" id="menu">
      <!-- <h1 class="heading">Menu Kami</h1> -->
      <h2 class="sub-heading" id="makanan">Makanan</h2>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="img/imgf1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Fried Rice</h3>
            <span class="pice">IDR 30.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>grilled chicken</h3>
            <span class="pice">IDR 45.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Ramen</h3>
            <span class="pice">IDR 30.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf4.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Steak</h3>
            <span class="pice">IDR 70.000</span>
          </div>
        </div>
        <!-- <div class="box">
          <div class="image">
            <img src="img/imgf5.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Stir-Fried Shrimp</h3>
            <span class="pice">IDR 55.000</span>
          </div>
        </div> -->
        <div class="box">
          <div class="image">
            <img src="img/imgf6.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Stir-Fried Shrimp</h3>
            <span class="pice">IDR 55.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf7.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Potato with Steak</h3>
            <span class="pice">IDR 80.099</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf8.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Fried Chicken Wings Stir-Fried in Soy Sauce</h3>
            <span class="pice">IDR 38.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf9.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Boiled Potatoes with Tomatoes</h3>
            <span class="pice">IDR 50.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgf10.jpg" alt="" />
          </div>
          <div class="content">
            <h3>vegetable salad</h3>
            <span class="pice">IDR 30.000</span>
          </div>
        </div>
        <!-- <div class="box">
          <div class="image">
            <img src="img/imgf11.jpg" alt="" />
          </div>
          <div class="content">
            <h3>grilled chicken</h3>
            <span class="pice">$12.099</span>
          </div>
        </div> -->
        <div class="box">
          <div class="image">
            <img src="img/imgf12.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Xiao Long with Avocado</h3>
            <span class="pice">IDR 42.000</span>
          </div>
        </div>
      </div>
      <h2 class="sub-heading" id="minuman">Minuman</h2>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="img/imgd.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Cappuccino</h3>
            <span class="pice">IDR 25.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgd2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Iced Milk Coffee</h3>
            <span class="pice">IDR 28.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgd3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Orange juice</h3>
            <span class="pice">IDR 15.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgd4.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Lemon Ice</h3>
            <span class="pice">IDR 18.000</span>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="img/imgd5.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Chocolate Ice Cream Topping</h3>
            <span class="pice">IDR 28.000</span>
          </div>
        </div>
      </div>
      <h2 class="sub-heading" id="desserts">Desserts</h2>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="img/imgc1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Cake Chocolate</h3>
            <span class="pice">IDR 25.000</span>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/imgc2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Chocolate Brownies</h3>
            <span class="pice">IDR 20.000</span>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/imgc3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Waffles</h3>
            <span class="pice">IDR 26.000</span>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/imgc4.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Chocolate Pancakes with Ice Cream</h3>
            <span class="pice">IDR 30.000</span>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/imgc5.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Ice Cream With Caramel Sauce</h3>
            <span class="pice">IDR 18.000</span>
          </div>
        </div>
      </div>
    </section>
    <!-- menu end -->
  </body>
</html>
