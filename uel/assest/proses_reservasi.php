<?php
include_once("config.php");

// Periksa apakah pengguna sudah login
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    header("Location: pembayaran.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tipeRuangan = $_POST['tipe_ruangan'];
    $jumlahKursi = $_POST['jumlah_kursi'];
    $pesanTambahan = $_POST['pesan_tambahan'];
    $noTelepon = $_POST['no_telepon'];
    $makananMinuman = $_POST['menu'];
    $tanggalWaktu = $_POST['tanggal_waktu'];

    // Validasi data jika diperlukan

    try {
        $stmt = $config->prepare("INSERT INTO Reservasi (user_id, nama, tipe_ruangan, jumlah_kursi, pesan_tambahan, no_telepon, menu, tanggal_waktu) VALUES (:user_id, :nama, :tipe_ruangan, :jumlah_kursi, :pesan_tambahan, :no_telepon, :menu, :tanggal_waktu)");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':tipe_ruangan', $tipeRuangan);
        $stmt->bindParam(':jumlah_kursi', $jumlahKursi);
        $stmt->bindParam(':pesan_tambahan', $pesanTambahan);
        $stmt->bindParam(':no_telepon', $noTelepon);
        $stmt->bindParam(':menu', $makananMinuman);
        $stmt->bindParam(':tanggal_waktu', $tanggalWaktu);

        $stmt->execute();

        // Mengarahkan ke halaman pembayaran jika reservasi berhasil
        header("Location: pembayaran.php");
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
