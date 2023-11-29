<?php

include_once("config.php");
// $reservasiid = $_GET['reservasi_id'];
// $reservasiid = isset($_GET['reservasi_id']) ? $_GET['reservasi_id'] : '';

// try {
//     $stmt = $pdo->prepare("DELETE FROM reservasi WHERE reservasi_id = :reservasi_id");
//     $stmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
//     $stmt->execute();

//     header("Location: dashboard.php");
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// $pdo = null;





// // Check if reservasi_id is set and is a valid integer 
// $reservasiid = isset($_GET['reservasi_id']) ? intval($_GET['reservasi_id']) : 0;

// try {
//     if ($reservasiid > 0) {
       
//         $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM reservasi WHERE reservasi_id = :reservasi_id");
//         $checkStmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
//         $checkStmt->execute();

//         $recordExists = $checkStmt->fetchColumn();

//         if ($recordExists) {
           
//             $deleteStmt = $pdo->prepare("DELETE FROM reservasi WHERE reservasi_id = :reservasi_id");
//             $deleteStmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
//             $deleteStmt->execute();

//             header("Location: dashboard.php");
//         } else {
//             echo "Record not found.";
//         }
//     } else {
//         echo "Invalid reservasi_id.";
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// // $pdo = null;





// Check if reservasi_id is set and is a valid integer
// $reservasiid = isset($_POST['reservasi_id']) ? intval($_POST['reservasi_id']) : 0;

// try {
//     if ($reservasiid > 0) {

//         $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM reservasi WHERE reservasi_id = :'reservasi_id'");
//         $checkStmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
//         $checkStmt->execute();

//         $recordExists = $checkStmt->fetchColumn();

//         if ($recordExists) {

//             $deleteStmt = $pdo->prepare("DELETE FROM reservasi WHERE reservasi_id = :'reservasi_id'");
//             $deleteStmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
//             $deleteStmt->execute();

//             header("Location: dashboard.php");
//         } else {
//             echo "Record not found.";
//         }
//     } else {
//         echo "reservasi_id. tidak ditemukan";
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// $pdo = null; // Close the database connection here

$reservasiid = isset($_POST['reservasi_id']) ? intval($_POST['reservasi_id']) : 0;

try {
    if ($reservasiid > 0) {

        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM reservasi WHERE reservasi_id = :reservasi_id");
        $checkStmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
        $checkStmt->execute();

        $recordExists = $checkStmt->fetchColumn();

        if ($recordExists) {

            $deleteStmt = $pdo->prepare("DELETE FROM reservasi WHERE reservasi_id = :reservasi_id");
            $deleteStmt->bindParam(':reservasi_id', $reservasiid, PDO::PARAM_INT);
            $deleteStmt->execute();

            header("Location: dashboard.php");
        } else {
            echo "Record not found.";
        }
    } else {
        echo "reservasi_id. tidak ditemukan";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null; // Close the database connection here

?>

