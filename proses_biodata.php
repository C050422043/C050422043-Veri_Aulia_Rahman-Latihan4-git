<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata Anda:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
        $email = $_POST["email"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        
        echo "<p>Nama: $nama</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Telepon: $telepon</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
    }
    ?>
</body>
</html>
