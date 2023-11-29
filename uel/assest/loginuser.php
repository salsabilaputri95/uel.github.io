<?php
include_once("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    try {
        if ($userType == "user") {
            $stmt = $config->prepare("SELECT * FROM User WHERE username = :username AND password = :password");
        } elseif ($userType == "admin") {
            $stmt = $config->prepare("SELECT * FROM Admin WHERE username = :username AND password = :password");
        }

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count == 1) {
            $_SESSION["login"] = true;
            if($userType == "user"){
            header("Location: index.php");
            exit;
            } else if($userType == "admin"){
            header("Location: dashboard.php");
            exit;
            }
        } else {
            echo "Invalid username or password";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    <link rel="stylesheet" href="css/loginuser.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <form class="form" id="login" action="" method="POST">
        <h1 class="form__title">Login</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
          <input
            type="text"
            name="username"
            class="form__input"
            autofocus
            placeholder="Username or email"
          />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input type="password" name="password" class="form__input" placeholder="Password" />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <label for="userType">Pilih tipe pengguna:</label>
          <select name="userType" id="userType" class="form__input">
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <button class="form__button" type="submit">Continue</button>
        <p class="form__text">
          <a class="form__link" href="index.php" id="linkCreateAccount">Belum Punya Akun? Buat Akun</a>
        </p>
      </form>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>
