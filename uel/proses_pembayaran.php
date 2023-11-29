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
        $conn = createConnection();
        $waktuPembayaran = date("Y-m-d H:i:s");
        $stmt = $conn->prepare("INSERT INTO Pembayaran (nama_lengkap, email, no_telepon, nama_kartu, nomor_rekening, harga) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssd', $namaLengkap, $email, $noTelepon, $namaKartu, $nomorRekening, $harga);

        if (!$stmt->execute()) {
            echo "Error: " . print_r($stmt->error, true);
        } else {
            // Tampilkan popup sukses
            header("Location: berhasil.php");
        }

    } catch (Exception $e) {
        // Tampilkan popup gagal
        header("Location: gagal.php");
    }
}

$conn->close();
?>
