<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "uel"; 

try {
    $config = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " ";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
