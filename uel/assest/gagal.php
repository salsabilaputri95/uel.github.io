<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" rel="stylesheet" />

  <style>
    body {
      font-family: Poppins;
      min-height: 100vh;
      background: #80caf3;
    }
    .trigger_popup {
      cursor: pointer;
      font-size: 20px;
      text-decoration: none;
      font-weight: bold;
      color: white;
      padding: 20px;
    }
    #success_trigger {
      background: #32ba7c;
      position: fixed;
      top: 20%;
      left: 20%;
    }
    #error_trigger {
      background: #ff3636;
      position: fixed;
      top: 20%;
      left: 60%;
    }

    #success {
      display: none;
      position: fixed;
      top: 20%;
      left: 10%;
    }
    #error {
      display: none;
      position: fixed;
      top: 20%;
      left: 55%;
    }

    .popup-content {
      width: 326px;
      height: 408px;
      background: white;
      box-shadow: 4px 4px 70px 10px rgb(0 0 0/11%);
      border-radius: 25px;
    }
    .imgbox {
      text-align: center;
    }
    .img {
      width: 112px;
      margin-top: 40px;
    }
    .title {
      font-weight: 500;
      font-size: 24px;
      letter-spacing: 0.05em;
      text-align: center;
      margin: auto;
    }
    #success .title {
      color: #32ba7c;
    }
    #error .title {
      color: #ff3636;
    }
    .para {
      font-weight: 500;
      width: 80%;
      font-size: 18px;
      line-height: 30px;
      letter-spacing: 0.05em;
      text-align: center;
      margin: auto;
    }
    .button {
      width: 50%;
      display: block;
      margin: 20px auto;
      border-radius: 25px;
      padding: 10px;
      text-decoration: none;
      color: white;
      text-align: center;
      letter-spacing: 0.05em;
    }
    #s_button {
      background: #32ba7c;
    }
    #e_button {
      background: #ff3636;
    }
  </style>
  <title>gagal</title>
</head>
<body>
    <main>
        
    </main>
    <div class="popup" id="">
      <div class="popup-content">
        <div class="imgbox">
          <img src="cancel.png" alt="" class="img" />
        </div>
        <div class="title">
          <h3>Sorry :(</h3>
        </div>
        <p class="para">Terjadi kesalahan saat melakukan pembayaran!</p>
        <form action="">
          <a href="pembayaran.php" class="button" id="e_button">Coba Lagi</a>
        </form>
      </div>
    </div>
    <?php

//   function displayPopup($popupId, $popupMessage, $buttonText) {
//     echo '<div class="popup" id="' . $popupId . '">';
//     echo '<div class="popup-content">';
//     echo '<div class="imgbox">';
//     echo '<img src="' . $popupId . '.png" alt="" class="img" />';
//     echo '</div>';
//     echo '<div class="title">';
//     echo '<h3>' . $popupMessage . '</h3>';
//     echo '</div>';
//     echo '<p class="para">' . $popupMessage . '</p>';
//     echo '<form action="">';
//     echo '<a href="#" class="button" id="' . $popupId . '_button">' . $buttonText . '</a>';
//     echo '</form>';
//     echo '</div>';
//     echo '</div>';
//   }


//   displayPopup("success", "Success!", "Kembali");
//   displayPopup("error", "Sorry :(", "Coba Lagi");
//   ?>

  <!-- <script>
    var success_popup = document.getElementById("success");
    var error_popup = document.getElementById("error");
    var s_close = document.getElementById("s_button");
    var e_close = document.getElementById("e_button");

    s_close.onclick = function () {
      success_popup.style.display = "none";
    };

    e_close.onclick = function () {
      error_popup.style.display = "none";
    };
  </script>  -->
</body>
</html>
