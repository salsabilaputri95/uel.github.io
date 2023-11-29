<?php
include_once("config.php");
?>



<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/pembayaran.css" />
  </head>
  <body>
    <div class="container">
    <form action="proses_pembayaran.php" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">Billing Address</h3>
                <div class="inputBox">
                    <span>Nama Lengkap :</span>
                    <input type="text" name="nama_lengkap" placeholder=" " />
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@example.com" />
                </div>
                <div class="inputBox">
                    <span>No Telepon :</span>
                    <input type="number" name="no_telepon" placeholder="" />
                </div>
            </div>
            <div class="col">
                <h3 class="title">Pembayaran</h3>
                <div class="inputBox">
                    <span>Cards Accepted :</span>
                    <img src="img/card_img.png" alt="" />
                </div>
                <div class="inputBox">
                    <span>Nama di Kartu :</span>
                    <input type="text" name="nama_kartu" placeholder="" />
                </div>
                <div class="inputBox">
                    <span>Nomor Rekening :</span>
                    <input type="number" name="nomor_rekening" placeholder="1111-2222-3333-4444" />
                </div>
                <div class="inputBox">
                    <span>Harga :</span>
                    <input type="number" name="harga" placeholder="Harga" />
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Bayar" class="submit-btn">
    </form>
    </div>


    <script src="js/pembayaran.js"></script>
  </body>
</html>
