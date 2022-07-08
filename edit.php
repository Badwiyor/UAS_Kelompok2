<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $provinsi = $data["provinsi"];
    $email = $data["email"];
    $nohp = $data["nohp"];
    $keahlian = $data["keahlian"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form" action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Mahasiswa</legend>
          <p>
            <label for="id">ID : </label>
            <input type="text" name="id" id="id" value="<?php echo $id ?>">
          </p>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
          </p>
          <p>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
          </p>
          <p>
            <label for="provinsi" >Propinsi : </label>
              <select name="provinsi" id="provinsi">
                <option value="JawaBarat" <?php if($data['provinsi'] == 'JawaBarat'){ echo 'selected'; } ?>>
                Jawa Barat </option>
                <option value="Banten" <?php if($data['provinsi'] == 'Banten'){ echo 'selected'; } ?>>
                Banten</option>
                <option value="DkiJakarta" <?php if($data['provinsi'] == 'DkiJakarta'){ echo 'selected'; } ?>>
                DKI Jakarta</option>
                <option value="Yogyakarta" <?php if($data['provinsi'] == 'Yogyakarta'){ echo 'selected'; } ?>>
                Yogyakarta</option>
                <option value="JawaTimur" <?php if($data['provinsi'] == 'JawaTimur'){ echo 'selected'; } ?>>
                Jawa Timur</option>
                <option value="Bali" <?php if($data['provinsi'] == 'Bali'){ echo 'selected'; } ?>>
                Bali</option>
              </select>
          </p>
          <p>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>">
          </p>
          <p >
            <label for="nohp">No HP : </label>
            <input type="text" name="nohp" id="nohp" value="<?php echo $nohp ?>">
          </p>
          <p >
            <label for="keahlian">Keahlian : </label>
            <input type="text" name="keahlian" id="keahlian" value="<?php echo $keahlian ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>