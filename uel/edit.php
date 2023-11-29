<?php
include_once("config.php");
session_start();
$conn = createConnection();

if (isset($_GET['id'])) {
    $reservasiId = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM reservasi WHERE reservasi_id = ?");
    $stmt->bind_param('i', $reservasiId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        $reservasi = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
} else {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $tipeRuangan = $_POST['tipe_ruangan'];
    $jumlahKursi = $_POST['jumlah_kursi'];
    $pesanTambahan = $_POST['pesan_tambahan'];
    $noTelepon = $_POST['no_telepon'];
    $makananMinuman = $_POST['menu'];
    $tanggalWaktu = $_POST['tanggal_waktu'];

    $queryUpdate = "UPDATE reservasi SET nama = ?, no_telepon = ?, tipe_ruangan = ?, jumlah_kursi = ?, menu = ?, pesan_tambahan = ? WHERE reservasi_id = ?";
    $stmtUpdate = $conn->prepare($queryUpdate);
    $stmtUpdate->bind_param('ssssiss', $nama, $noTelepon, $tipeRuangan, $jumlahKursi, $makananMinuman, $pesanTambahan, $reservasiId);

    $resultUpdate = $stmtUpdate->execute();

    if ($resultUpdate) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . $stmtUpdate->error;
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

    <!-- Link style -->
    <link rel="stylesheet" href="css/edit.css" />
    <title>Edit Reservasi</title>
</head>
<body>
<section class="edit" id="edit">
    <h2 class="heading">Edit Reservasi</h2>
    <form method="POST" action="">
        <div class="inputBox">
            <div class="input">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?= $reservasi['nama']; ?>" required>
            </div>
            <div class="input">
                <label for="no_telepon">No Telepon:</label>
                <input type="text" name="no_telepon" value="<?= $reservasi['no_telepon']; ?>" required>
            </div>
            <div class="input">
                <label for="tipe_ruangan">Tipe Ruangan:</label>
                <input type="text" name="tipe_ruangan" value="<?= $reservasi['tipe_ruangan']; ?>" required>
            </div>
            <div class="input">
                <label for="tanggal_waktu">Tanggal & Waktu:</label>
                <input type="datetime-local" name="tanggal_waktu" value="<?= date('Y-m-d\TH:i', strtotime($reservasi['tanggal_waktu'])); ?>" required>
            </div>
            <div class="input">
                <label for="jumlah_kursi">Jumlah Kursi:</label>
                <input type="number" name="jumlah_kursi" value="<?= $reservasi['jumlah_kursi']; ?>" required>
            </div>
            <div class="input">
                <label for="menu">Menu:</label>
                <input type="text" name="menu" value="<?= $reservasi['menu']; ?>" required>
            </div>
            <div class="input">
                <label for="pesan_tambahan">Pesan Tambahan:</label>
                <textarea name="pesan_tambahan" ><?= $reservasi['pesan_tambahan']; ?></textarea>
            </div>
        </div>

        <button type="submit" class="btn">Simpan Perubahan</button>
    </form>
</section>
<script>
    function validateForm() {
        var nama = document.getElementsByName('nama')[0].value;
        var noTelepon = document.getElementsByName('no_telepon')[0].value;
        var tanggalWaktu = document.getElementsByName('tanggal_waktu')[0].value;
        var jumlahKursi = document.getElementsByName('jumlah_kursi')[0].value;

        if (nama.trim() === '' || noTelepon.trim() === '' || tanggalWaktu.trim() === '' || jumlahKursi.trim() === '') {
            alert('Semua field harus diisi');
            return false;
        }

        return true;
    }
</script>
</body>
</html>
