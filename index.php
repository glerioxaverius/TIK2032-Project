<?php

include "Service/database.php";

if(isset($_POST['login'])) {
  $Nama = $_POST['nama'];

  $sql = "INSERT INTO pengunjung (nama, ) VALUES ('$Nama')";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas HTML</title>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
    <!-- Script -->
    <script src="script.js"></script>

    <!-- Code -->
    <?php include "TampilanUtama.php" ?>
    <div class="tamu">
      <h5>Daftar Pengunjung</h5>
      <form action="index.php" method="POST">
        <div class="daftar">
          <input type="text" name="nama" placeholder="Nama" required />
          <button type="input" name="login">submit</button>
        </div>
      </form>
    </div>
    <br />
    <div class="daftarTamu">
      <table>
        <thead>
          <th>Nama</th>
          <th>Waktu Kunjungan</th>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
