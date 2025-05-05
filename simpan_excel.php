<?php
// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$sesi = $_POST['sesi'];
$konfirmasi = isset($_POST['konfirmasi']) ? 'Ya' : 'Tidak';

// Format data yang akan disimpan
$data = "$nama, $email, $telepon, $sesi, $konfirmasi\n";

// Simpan ke file teks
file_put_contents("pendaftaran.txt", $data, FILE_APPEND);

// Tampilkan pesan sukses
echo "Terima kasih, data Anda telah disimpan.";
?>
