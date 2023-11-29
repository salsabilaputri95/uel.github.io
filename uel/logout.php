<?php
session_start();

// Hapus semua data sesi
unset($_SESSION);

// Hancurkan sesi
session_destroy();

// Arahkan pengguna ke halaman login atau halaman lain yang sesuai
header("Location: index.php");
exit();
?>

