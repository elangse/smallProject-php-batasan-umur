<?php
  session_start(); // mulai session
  if (isset($_SESSION["pesan"])) { // cek kalau ada pesan notif
    $pesan = $_SESSION["pesan"]; // simpan ke variabel
    unset($_SESSION["pesan"]); // buang variabel session ini biar gk numpuk.

    echo "<script> alert('$pesan'); </script>"; // notif sederhana menggunakan alert Javascript.
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action="proses.php" method="post">
    <label for="nama">Nama: </label>
    <br>
    <input id="nama" type="text" name="nama">
    <br>

    <label for="tgl_lahir">Tanggal lahir:</label>
    <br>
    <input id="tgl_lahir" type="date" name="tgl_lahir" required>
    <br>
    <br>
    <button type="submit">Kirim</button>
  </form>
</body>
</html>
