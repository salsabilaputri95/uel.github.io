<?php
include_once("config.php");
session_start();
$conn = createConnection();

$reservasiid = $_GET['id'];

try {
    if (!empty($reservasiid) && is_numeric($reservasiid)) {
        $deleteStmt = $conn->prepare("DELETE FROM reservasi WHERE reservasi_id = ?");
        $deleteStmt->bind_param('i', $reservasiid); // 'i' menunjukkan bahwa ini adalah tipe data integer
        $deleteStmt->execute();

        if ($deleteStmt->affected_rows > 0) {
            header("Location: dashboard.php");
        } else {
            echo "reservasi_id tidak ditemukan atau sudah dihapus";
        }
    } else {
        echo "reservasi_id tidak valid";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Selalu tutup koneksi setelah digunakan
    if ($conn) {
        $conn->close();
    }
}
?>


