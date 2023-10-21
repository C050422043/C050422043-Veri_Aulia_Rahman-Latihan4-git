<?php
$dir_upload = "files/";
$uploadfile = $dir_upload . $_FILES['file']['name'];

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    
    if ($kirim) {
        echo "File berhasil diupload ke server pada folder <b>Suploadfile</b>";
    } else {
        echo "File gagal diupload";
        echo "error: " . $_FILES['file']['error'];
    }
} else {
    echo "File tidak berhasil diunggah. Mohon periksa pengaturan file Anda.";
}
?>
