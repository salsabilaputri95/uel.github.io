<?php
include("config.php");
session_start();

$conn = createConnection();
$sql = "SELECT reservasi_id, nama, no_telepon, tipe_ruangan, DATE_FORMAT(tanggal_waktu, '%d-%m-%Y') AS formatted_date, TIME_FORMAT(tanggal_waktu, '%H:%i:%s') AS formatted_time, jumlah_kursi, menu, pesan_tambahan FROM reservasi";
$result = $conn->query($sql);

if ($result) {
    $reservasiData = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Error: " . $sql . "<br>";
    echo "Error description: " . $config->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/dashboard.css" />

    <title>Admin</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-smile"></i>
        <span class="text">Admin</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="dashboard.php">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">My Store</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="index.html" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>
        <form action="search.php" method="post">
          <div class="form-input">
              <input type="search" name="search" placeholder="Search..." />
              <button type="submit" class="search-btn">
                  <i class="bx bx-search"></i>
              </button>
          </div>
       </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <!-- <a class="active" href="#">Home</a> -->
              </li>
            </ul>
          </div>
          <!-- <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a> -->
        </div>

        <div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Reservasi</h3>
            <i class="bx bx-search"></i>
            <i class="bx bx-filter"></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Tipe Ruangan</th>
                    <th>Tanggal & waktu</th>
                    <th>Jumlah Kursi</th>
                    <th>Menu</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
             <?php
              foreach ($reservasiData as $reservasi) {
                  echo "<tr>";
                  echo "<td>" . $reservasi['reservasi_id'] . "</td>";
                  echo "<td>" . $reservasi['nama'] . "</td>";
                  echo "<td>" . $reservasi['no_telepon'] . "</td>";
                  echo "<td>" . $reservasi['tipe_ruangan'] . "</td>";
                  echo "<td>" . $reservasi['formatted_date'] . " " . $reservasi['formatted_time'] . "</td>";
                  echo "<td>" . $reservasi['jumlah_kursi'] . "</td>";
                  echo "<td>" . $reservasi['menu'] . "</td>";
                  echo "<td>" . $reservasi['pesan_tambahan'] . "</td>";
                  
                  // Add edit and delete buttons
                  echo "<td><a href='edit.php?id=" . $reservasi['reservasi_id'] . "'>Edit</a></td>";
                  echo "<td><a href='hapus.php?id=" . $reservasi['reservasi_id'] . "'>Delete</a></td>";

                  echo "</tr>";
              }
              ?>


                </tbody>
            </table>
        </div>
    </div>

      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="js/dashboard.js"></script>
    <script src="node_modules/jspdf/dist/jspdf.umd.min.js"></script>
  </body>
</html>
