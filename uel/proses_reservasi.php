<?php
include_once("config.php");

// Periksa apakah pengguna sudah login
session_start();

// Mendapatkan koneksi
$conn = createConnection();

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
        // Periksa apakah koneksi berhasil
        if (!$conn) {
            throw new Exception("Koneksi database gagal.");
        }

        // Persiapkan pernyataan SQL
        $stmt = $conn->prepare("INSERT INTO Reservasi (user_id, nama, tipe_ruangan, jumlah_kursi, pesan_tambahan, no_telepon, menu, tanggal_waktu) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Periksa apakah persiapan pernyataan berhasil
        if (!$stmt) {
            throw new Exception("Persiapan pernyataan SQL gagal.");
        }

        $stmt->bind_param('isssssss', $user_id, $nama, $tipeRuangan, $jumlahKursi, $pesanTambahan, $noTelepon, $makananMinuman, $tanggalWaktu);

        $stmt->execute();

        // Mengarahkan ke halaman pembayaran jika reservasi berhasil
        header("Location: pembayaran.php");
        exit();

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Selalu tutup koneksi setelah digunakan
        if ($conn) {
            $conn->close();
        }
    }
}
?>

