<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $nohp = $_POST['nomor_telepon'];
    $userType = $_POST['userType'];

    try {
        // Memanggil fungsi createConnection dari file config.php
        $conn = createConnection();

        if ($userType == "user") {
            $stmt = $conn->prepare("INSERT INTO User (username, password, email, nama_lengkap, nomor_telepon) VALUES (?, ?, ?, ?, ?)");
        } elseif ($userType == "admin") {
            $stmt = $conn->prepare("INSERT INTO Admin (username, password, email, nama_lengkap, nomor_telepon) VALUES (?, ?, ?, ?, ?)");
        }

        $stmt->bind_param('sssss', $username, $password, $email, $name, $nohp);
        $stmt->execute();

        $_SESSION["registrasi"] = true;
        if ($userType == "user") {
            header("Location: loginsukses.php");
            exit;
        } elseif ($userType == "admin") {
            header("Location: dashboard.php");
            exit;
        }

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Selalu tutup koneksi setelah digunakan
        $conn->close();
    }
}
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
    <link rel="shortcut icon" href="/assets/favicon.ico" />

    <!-- Link style -->
    <link rel="stylesheet" href="css/registrasiuser.css" />
    <title>Registrasi</title>
  </head>
  <body>
    <div class="container">
      <form onsubmit="return validateForm()" class="form form--hidden" id="createAccount" action="registeruser.php" method="POST">
        <h1 class="form__title">Registrasi</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
          <input
            type="text"
            name="name"
            id="name"
            class="form__input"
            placeholder="Nama Lengkap"
          />
        </div>
        <div class="form__input-group">
          <input
            type="text"
            name="username"
            id="signupUsername"
            class="form__input"
            placeholder="Username"
          />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input type="text" name="email" id="email" class="form__input" placeholder="Alamat Email" />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input
            type="number"
            name="nomor_telepon"
            id="nohp"
            class="form__input"
            placeholder="Nomor Telepon"
          />
        </div>
        <div class="form__input-group">
          <input type="password" name="password" id="password" class="form__input" placeholder="Password" />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input
            type="password"
            name="confirmPassword"
            id="confirmPassword"
            class="form__input"
            placeholder="Konfirmasi password"
          />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <label for="userType">Pilih tipe pengguna:</label>
          <select name="userType" id="userType" class="form__input">
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <button class="form__button" type="submit">Daftar</button>
        <p class="form__text">
          <a class="form__link" href="loginuser.php" id="linkLogin">Sudah Punya Akun?</a>
        </p>
      </form>
    </div>

    <script>
      function validateForm() {

        var name = document.getElementById("name").value;
        var username = document.getElementById("signupUsername").value;
        var email = document.getElementById("email").value;
        var nohp = document.getElementById("nohp").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var userType = document.getElementById("userType").value;


        if (name === "" || username === "" || email === "" || nohp === "" || password === "" || confirmPassword === "") {
          alert("Semua field harus diisi");
          return false;
        }


        return true; 
      }
    </script>
  </body>
</html>

