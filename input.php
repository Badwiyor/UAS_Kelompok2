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
  <h1>Input Data</h1>
  <div class="container">
    <form id="index" action="input_proses.php" method="post">
      <fieldset>
        <legend>Input Data Mahasiswa</legend>
        <p>
          <label for="id">ID : </label>
          <input type="text" name="id" id="id" placeholder="Contoh: 123456">
        </p>
        <p>
          <label for="nama">Nama Lengkap : </label>
          <input type="text" name="nama" id="nama" placeholder="Contoh: udin">
        </p>
        <p>
          <label for="alamat">Alamat Lengkap : </label>
          <input type="text" name="alamat" id="alamat">
        </p>
        <p>
          <label for="provinsi" >Provinsi : </label>
          <select name="provinsi" id="provinsi">
            <option value="JawaBarat">Jawa Barat</option>
            <option value="Banten">Banten</option>
            <option value="DkiJakarta">DKI Jakarta</option>
            <option value="Yogyakarta">DI Yogyakarta</option>
            <option value="JawaTimur">Jawa Timur</option>
            <option value="Bali">Bali</option>
          </select>
        </p>
        <p>
          <label for="email">Email : </label>
          <input type="text" name="email" id="email"placeholder="Contoh: SarangLebah@gmail.com">
        </p>
        <p >
          <label for="nohp">No HP : </label>
          <input type="text" name="nohp" id="nohp" placeholder="Contoh: 08123456789">
        </p>
        <p >
          <label for="keahlian">Keahlian : </label>
          <input type="text" name="keahlian" id="keahlian" placeholder="Contoh: Belajar">
        </p>

      </fieldset>
      <p>
        <input type="submit" name="input" value="Tambah Data">
      </p>
    </form>
  </div>
</body>
</html>