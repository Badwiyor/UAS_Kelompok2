<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
  <style>
    table{
      width: 840px;
      margin: auto;
    }
    h1{
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Data Relawan Covid19 wilayah DKI Jakarta</h1>
  <center >
    <?php 
    date_default_timezone_set('Asia/Jakarta');
    echo "Per-". date("d F Y h:i:s");
    echo "<br>";
    ?>
    <a href="input.php">Input Data &Gt; </a>
    <br>
    <a href="logout.php">Logout</a>
    <a href="index.php">
    <button onClick="window.print();">Print</button>
    </a>
  </center>
  <br/>
  <table border="1">
    <tr>
     <!--  <th>No</th> -->
     <th>Id</th>
     <th>Nama Lengkap</th>
     <th>Alamat Rumah</th>
     <th>Propinsi</th>
     <th>Email</th>
     <th>No HP</th>
     <th>Keahlian</th>
     <th>Aksi</th>
   </tr>
   <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
   $query = "SELECT * FROM data ORDER BY id ASC";
   $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
   if(!$result){
    die ("Query Error: ".mysqli_errno($link).
     " - ".mysqli_error($link));
  }

      //buat perulangan untuk element tabel dari data mahasiswa
      // $no = 1; //variabel untuk membuat nomor urut
      // // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // // kemudian dicetak dengan perulangan while
  while($data = mysqli_fetch_assoc($result))
  {
        // mencetak / menampilkan data
    echo "<tr>";
        // echo "<td>$no</td>"; //menampilkan no urut
    echo"<td>$data[id]</td>";
        echo "<td>$data[nama]</td>"; //menampilkan data nim
        echo "<td>$data[alamat]</td>"; //menampilkan data nama
        echo "<td>$data[provinsi]</td>"; //menampilkan data fakultas
        echo "<td>$data[email]</td>"; //menampilkan data jurusan
        echo "<td>$data[nohp]</td>"; //menampilkan data ipk
        echo "<td>$data[keahlian]</td>";
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
        <a href="edit.php?id='.$data['id'].'">Edit</a> /
        <a href="hapus.php?id='.$data['id'].'"
        onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        // $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
  </body>
</html>
