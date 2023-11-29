<?php
include_once("config.php");
$userType = "admin";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Swipe -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
    <link rel="stylesheet" href="css/style.css" />

    <!-- link script -->
  <!-- <script src="css/project/node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->

    <title>UEL</title>
  </head>
  <>
    <!-- Navbar start -->
    <header>
      <a href="#" class="logo"><i class="fas fa-utensils"></i>UEL</a>

      <nav class="navbar">
        <a class="active" href="#home">Home</a>
        <a href="#room">Room Type</a>
        <a href="menu.php">Menu</a>
        <a href="#order">Reservation</a>
        <a href="#about">About</a>
        <a href="#contact">contact</a>
        <a href="dashboard.php" id="dashboardLink">Dashboard</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="seacrh-icon"></i>
        <a href="#" class="fa fa-sign-in" onclick="toggleOptions()"></a>

        <!-- Opsi yang awalnya disembunyikan -->
        <div id="options" class="options">
            <ul>
                <a href="loginuser.php" onclick="showLogin()">Login</a>
                <a href="registeruser.php" onclick="showRegister()">Register</a>
                <a href="logout.php" onclick="logout()">Logout</a>
            </ul>
        </div>
      </div>

      <!-- <div class="profile">
        <a href="loginuser.php" class="btn">Login</a>
      </div>
      <div class="profile">
        <a href="registeruser.php" class="btn">Register</a>
      </div> -->

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
    <!-- Home start -->
    <section class="home" id="home">
      <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
          <div class="swiper-slide slide">
            <div class="content">
              <span>Selamat Datang Di</span>
              <h3>URBAN EATS LOUNGE </h3>
              <p>
                Tempat di mana kebersamaan dihidangkan: santaplah bersama keluarga, 
                pacar, teman, dan rekan kerja Anda. Rasakan kenyamanan suasana kami 
                sambil menikmati hidangan lezat yang tak terlupakan.
              </p>
              <a href="#order" class="btn">Reservasi Sekarang</a>
            </div>
            <div class="image">
              <img src="img/bg/bg6.jpg" alt="" />
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="content">
              <h3>Ruagan Nyaman</h3>
              <p>
                Ruang makan kami menghadirkan kenyamanan dan atmosfer yang hangat, 
                sempurna untuk berbagi hidangan bersama keluarga dan teman. Nikmati 
                pengalaman makan yang tak terlupakan di sini
              </p>
              <a href="#order" class="btn">Reservasi Sekarang</a>
            </div>
            <div class="image">
              <img src="img/room3.jpg" alt="" />
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="content">
              <h3>Makanan & Minuman</h3>
              <p>
                Temukan kenikmatan makanan dan minuman terbaik di sini! Dari hidangan 
                lezat hingga minuman segar, kami hadirkan pengalaman kuliner terbaik 
                untuk Anda nikmati. Segera jelajahi dan rasakan cita rasa istimewa kami!
              </p>
              <a href="#order" class="btn">Reservasi Sekarang</a>
            </div>
            <div class="image">
              <img src="img/bg/bg7.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- Home end -->
    <!-- Room start -->
    <section class="room" id="room">
      <h1 class="heading">Tipe Ruangan</h1>
      <div class="box-container">
        <div class="box">
          <img src="img/room2.jpg" alt="" />
          <h3>Outdoor</h3>
          <span>Rp 380.000.00</span>
          <a href="#order" class="btn">Pesan Di Ruangan Ini</a>
        </div>

        <div class="box">
          <img src="img/room3.jpg" alt="" />
          <h3>Indoor</h3>
          <span>Rp 300.000.0</span>
          <a href="#order" class="btn">Pesan Di Ruangan Ini</a>
        </div>

        <div class="box">
          <img src="img/room1.jpg" alt="" />
          <h3>Private Room</h3>
          <span>Rp 500.000.0</span>
          <a href="#order" class="btn">Pesan Di Ruangan Ini</a>
        </div>

        </div>
    </section>
    <!-- Room end -->
    <!-- Reservasi start -->
    <section class="order" id="order">
      <h1 class="heading">Reservasi & Order</h1>
      <form action="proses_reservasi.php" method="post" class="center-form">
        <div class="inputBox">
          <div class="input">
            <span>Nama</span>
            <input type="text" name="nama" placeholder="Masukkan nama anda" required />
          </div>
          <div class="input">
            <span>No Telepon</span>
            <input type="tel" name="no_telepon" placeholder="Masukkan nomor telepon anda" required />
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>Tipe ruangan yang diinginkan</span>
            <input type="text" name="tipe_ruangan" placeholder="Outdoor/Indoor/Private Room" required />
          </div>
          <div class="input">
            <span>Makanan & Minuman</span>
            <input type="text" name="menu" placeholder="Masukkan makanan & minuman yang anda inginkan" required />
          </div>

        </div>
        <div class="inputBox">
          <div class="input">
            <span>Jumlah Kursi</span>
            <input type="number" name="jumlah_kursi" placeholder="Masukkan jumlah kursi yang diinginkan" required />
          </div>
          <div class="input">
            <span>Tanggal dan Waktu</span>
            <input type="datetime-local" name="tanggal_waktu" placeholder="Masukkan waktu dan tanggal" required />
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>Pesan Tambahan</span>
            <textarea name="pesan_tambahan" id="enter-your-message" cols="30" rows="10"></textarea>
          </div>
        </div>
        <button type="submit" class="btn">Bayar</button>
      </form>
    </section>
    <!-- Reservasi end -->



    <!-- About start -->
    <section class="about" id="about">
      <h1 class="heading">Tentang kami</h1>
      <div class="row">
        <div class="image">
          <img src="img/chef&food.jpg" alt="room3" />
        </div>

        <div class="content">
          <h3 class="sub-heading">Tempat Terbaik dengan Koki Profesional</h3>
          <p>
            Selamat Datang Di "RM Daeng," kami bangga memiliki tim koki yang
            berpengalaman dan berbakat, dipimpin oleh Chef Ahmad Daeng sendiri. Kami
            juga memiliki staf layanan yang terlatih dengan baik yang selalu siap
            melayani Anda dengan senyum.
          </p>
          <h3 class="sub-heading">Visi & Misi</h3>
          <p>
            Menjadi destinasi kuliner terkemuka dengan fokus pada pengalaman
            makan yang estetis, menciptakan seni rasa dan visual yang tak
            tertandingi. Kami berkomitmen untuk: Hadirkan hidangan berkualitas tinggi yang memukau mata dan lidah
            pelanggan, Sajikan pengalaman makan yang tak terlupakan bagi semua yang datang
            ke restoran kami, dan Tetap berinovasi dan mengikuti tren terbaru dalam dunia kuliner.
          </p>
          <div class="icons-container">
            <div class="icons">
              <i class="fas fa-dollar-sign"></i>
              <span>easy payment</span>
            </div>

            <div class="icons">
              <i class="fas fa-headset"></i>
              <span>24/7 service</span>
            </div>
            <!-- <a href="#" class="btn">learn more</a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- About end -->

    <!-- Contact start -->
    <section id="contact" class="contact">
      <h1 class="heading">Kontak</h1>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7513767327628!2d119.40508172409942!3d-5.143675402007067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d52ea30d089%3A0x6101a2ac09b61090!2sPantai%20Losari!5e0!3m2!1sid!2sid!4v1696415717038!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No HP" />
          </div>
          <button type="Submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
      <footer>
        <p>&copy; 2023 Website Reservasi - Rm Daeng</p>
      </footer>
    </section>
    <!-- Contact end -->

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    /> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  </body>
</html>
