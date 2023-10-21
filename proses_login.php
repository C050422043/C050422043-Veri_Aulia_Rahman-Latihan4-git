<?php
// Cek apakah metode pengiriman adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan oleh formulir
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Username dan password yang valid
    $valid_username = "Very";
    $valid_password = "wolf";

    // Periksa apakah username dan password cocok
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        echo "Login gagal! Silakan cek kembali username dan password Anda.";
    }
}
?>
