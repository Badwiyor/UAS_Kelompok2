<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['edit'])) {

  // membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $provinsi = $_POST['provinsi'];
  $email = $_POST['email'];
  $nohp = $_POST['nohp'];
  $keahlian = $_POST['keahlian'];


  // jalankan query INSERT untuk menambah data ke database
  $query = "UPDATE data SET nama = '".$nama."', alamat = '".$alamat."', provinsi = '".provinsi."', email = '".$email."', nohp = '".$nohp."', keahlian = '".$keahlian."' WHERE id = '".$id."' ";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");

?>