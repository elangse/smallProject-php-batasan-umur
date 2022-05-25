<?php
session_start(); // mulai session
date_default_timezone_set("Asia/Jakarta"); // setting timezone biar sesuai waktu indonesia.

// ambil data form
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];

// ubah inputan ke waktu detik
// (info lebih lanjut tentang strtotime, kunjungi https://www.php.net/manual/en/function.strtotime.php)
$waktu_tgl_lahir = strtotime($tgl_lahir); 

// ambil waktu sekaeang dalam satuan detik.
// (info lebih lanjut tentang time, kunjungi https://www.php.net/manual/en/function.time.php)
$waktu_sekarang = time();
$selisih = $waktu_sekarang - $waktu_tgl_lahir; // hitung selisih

// konvert ke tahun. (karna waktu yg kita punya ini satuannya detik, maka konvert dimulai dari jumlah detik dalam 1 menit)
$konvert = $selisih / (60 * 60 * 24 * 365); 
$umur = round($konvert); // pembulatan

// pengecekan
if ($umur < 17) {
  $_SESSION["pesan"] = "Maaf, hanya untuk 17 tahun keatas ya dek. Umurmu masih $umur tahun"; // pesan notif
  header("Location: form.php"); // redirect
} else {
  // letakkan program utama di sini
  header("Location: berhasil.php"); // redirect jika input sesuai (berhasil)
}

?>
