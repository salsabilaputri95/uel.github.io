<?php
session_start();

// Hancurkan semua data sesi
session_destroy();

// Arahkan pengguna ke halaman login atau halaman lain yang sesuai
header("Location: index.php");
exit();
?>
