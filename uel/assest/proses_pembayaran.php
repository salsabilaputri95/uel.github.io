<?php
include_once("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $namaLengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $noTelepon = isset($_POST['no_telepon']) ? $_POST['no_telepon'] : '';
    $namaKartu = isset($_POST['nama_kartu']) ? $_POST['nama_kartu'] : '';
    $nomorRekening = isset($_POST['nomor_rekening']) ? $_POST['nomor_rekening'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';

    try {

        $waktuPembayaran = date("Y-m-d H:i:s");

        $stmt = $config->prepare("INSERT INTO Pembayaran (nama_lengkap, email, no_telepon, nama_kartu, nomor_rekening, harga) VALUES (:nama_lengkap, :email, :no_telepon, :nama_kartu, :nomor_rekening, :harga)");
        $stmt->bindParam(':nama_lengkap', $namaLengkap);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':no_telepon', $noTelepon);
        $stmt->bindParam(':nama_kartu', $namaKartu);
        $stmt->bindParam(':nomor_rekening', $nomorRekening);
        $stmt->bindParam(':harga', $harga);

        if (!$stmt->execute()) {
            echo "Error: " . print_r($stmt->errorInfo(), true);
        } else {
            // Tampilkan popup sukses
            header("Location: berhasil.php");
            // echo '<script>';
            // echo 'document.getElementById("success_trigger").click();';
            // echo '</script>';
        }

    } catch (PDOException $e) {
        // Tampilkan popup gagal
        header("Location: gagal.php");
        // echo '<script>';
        // echo 'document.getElementById("error_trigger").click();';
        // echo '</script>';
    }
}
?>
