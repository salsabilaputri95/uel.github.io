<?php
// Include koneksi ke database
include_once("config.php");

// Periksa apakah parameter id telah diterima
if (isset($_GET['reseervasi_id'])) {
    $reservasiId = $_GET['reseervasi_id'];

    // Ambil data reservasi berdasarkan id
    $query = "SELECT * FROM Reservasi WHERE reseervasi_id = $reservasiId";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $reservasi = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($koneksi);
        exit;
    }
} else {
    // Jika id tidak diterima, arahkan pengguna ke halaman lain atau berikan pesan kesalahan
    header("Location: index.php");
    exit;
}

// Proses form edit jika data dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lakukan operasi update berdasarkan data yang dikirimkan
    $nama = $_POST['nama'];
    $noTelepon = $_POST['no_telepon'];
    $jumlahKursi = $_POST['jumlah_kursi'];
    $tanggalWaktu = $_POST['tanggal_waktu'];
    $pesanTambahan = $_POST['pesan_tambahan'];

    $queryUpdate = "UPDATE Reservasi SET nama = '$nama', no_telepon = '$noTelepon', jumlah_kursi = $jumlahKursi, tanggal_waktu = '$tanggalWaktu', pesan_tambahan = '$pesanTambahan' WHERE reseervasi_id = $reservasiId";

    $resultUpdate = mysqli_query($koneksi, $queryUpdate);

    if ($resultUpdate) {
        // Jika berhasil diupdate, arahkan pengguna ke halaman lain atau tampilkan pesan sukses
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
        exit;
    }
}

?>

<!-- HTML Form untuk Edit -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservasi</title>
</head>
<body>

<h2>Edit Reservasi</h2>

<form method="POST" action="">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?= $reservasi['nama']; ?>" required>

    <label for="no_telepon">No Telepon:</label>
    <input type="text" name="no_telepon" value="<?= $reservasi['no_telepon']; ?>" required>

    <label for="jumlah_kursi">Jumlah Kursi:</label>
    <input type="number" name="jumlah_kursi" value="<?= $reservasi['jumlah_kursi']; ?>" required>

    <label for="tanggal_waktu">Tanggal & Waktu:</label>
    <input type="datetime-local" name="tanggal_waktu" value="<?= date('Y-m-d\TH:i', strtotime($reservasi['tanggal_waktu'])); ?>" required>

    <label for="pesan_tambahan">Pesan Tambahan:</label>
    <textarea name="pesan_tambahan"><?= $reservasi['pesan_tambahan']; ?></textarea>

    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>
