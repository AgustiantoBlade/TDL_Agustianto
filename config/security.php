<?php
SESSION_START();

if (!isset($_SESSION['username'])) {
    // Pengguna tidak diautentikasi, redirect ke halaman login
    header("Location: login.php");
    exit;
}
?>
