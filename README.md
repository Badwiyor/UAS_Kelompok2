# UAS_Kelompok2
# UAS_kelompok2

Kontribusi:

Bayu Dwi Cahyo membuat struktur database, source code koneksi.php, index.php dan push github
Buzairimi membantu membuat table pada index.php
Dede Fahrurrozi membuat source code form login.php,   login_proses.php, dan logout.php
Fadillah Farhan membuat source code input.php dan input_proses.php
Gandy Satriawan membuat source code untuk edit.php dan edit_proses.php
Ifanka Maulika membuat source code hapus.php


Berikut link website Aplikasi Data Relawan Covid-19 : 
 
Username	: admin
Password	: admin

Data Relawan Covid-19 ini bertujuan untuk memenuhi UAS Kelompok kami 

pada mata kuliah Pemrograman Web 2 , dan dosen pengampu yaitu Bapak Sonasa Rinusantoro S.Kom., M.A., Kami Ucapkan terimakasih kepada bapak dosen, karena atas bimbingan nya selama perkuliahan di semester 6 ini kami dapat membuat aplikasi yang bermanfaat seperti ini dengan menggunakan bahasa pemrograman PHP dan basis data menggunakan MySql. Semoga kami dapat mengembangkan aplikasi sederhana ini dengan semaximal mungkin.

Aplikasi Data Relawan Covid-19 ini untuk mengetahui data-data Relawan covid -19 di 34 Provinsi di Indonesia. Sistem aplikasi ini adalah web base yang dikembangkan dengan menggunakan bahasa pemrograman PHP, HTML,CSS, JavaScript , 

ditambahkan framework Bootstrap dan basis data dengaan MySQL. Aplikasi ini menerapkan operasi operasi CRUD (Create, Read, Update, dan Delete) dengan bahasa PHP dan menyimpan database di MySQL. 

Berikut fungsi PHP dari setiap fitur Aplikasi Data Data Relawan Covid-19 : 

1. Index.php Index.php ini merupakan tampilan halaman website setelah user berhasil login. Pada halamain ini menampilkan data Relawan covid-19 dari setiap provinsi di Indonesia, data nya meliputi Nama Lengkap, Alamat Rumah , Provinsi,Email, No Hp , dan Keahlian.

Pada halaman ini juga, kita dapat melakukan entri data Relawan, edit 

data , menghapus data dan mencetak data Relawan dari masing-masing provinsi. Serta kolom pencarian untuk memudahkan user mencari data. 

2. Koneksi.php koneksi.php berfungsi untuk mengkoneksikan atau mengubungkan form dengan database MySQL, sehingga user dapat melakukan operasi CRUD. Dengan menggunakan fugsi mysqli_connect(), yang didalamnya terdapat komponen host, nama database, username dan password.

 3.	Tambah.php tambah.php ini berfungsi untuk menambahkan data jumlah Relawan covid-19. Didalam nya terdapat tampilan form data Relawan covid-19 berupa Nama Lengkap, Alamat Rumah , Provinsi,Email, No Hp , 

dan Keahlian. Dan terdapat <form method="post" action="simpan.php" > untuk menghubungkan ke fungsi simpan , dengan tujuan menyimpan data yang ingin ditambahkan ke dalam databa
berfungsi untuk menyimpan data, terdapat fungsi 
$input = "INSERT INTO data VALUES(NULL, 
'$nama_Lengkap', 
'$Alamat_rumah', 
'$Provinsi', 
'$Email', 
'$No_Hp', 
'$Keahlian')"; 

dimana fungsi tersebut untuk menyompdat data ke dalam database ditambah dengan fungsi include('koneksi.php');, yang 

menghubungkan ke database MySQL.

 5.	editform.php editform.php ini berfungsi untuk menampilkan form ubah data, yang bertujuan untuk mengubah data yang sudah diinput sebelumnya dan memperbaharui data. Terdapat sintax <form method="get" action="edit.php"> yang menghubungkan fungsi ke edit.php 

6.	Edit.php edit.php ini berfungsi untuk mengubah data Relawan covid-19 yang sudah diinput dan memperbaharui data yang terdapat didalam database MySQL dengan data yang diinput pada formedit. Didalam nya terdapat fungsi php 
$query = "UPDATE data SET nama_lengkap='$nama_lengkap' ,
alamat_rumah='$alamat_rumah' ,

Provinsi='$Provinsi' , Email='$Email',
No_Hp='$No_Hp',
Keahlian='$Keahlian', 
WHERE id='$id' "; 

7.	delete.php hapus.php berfunsgi untuk menghapus data Relawan covid-19 yang terdapat pada tampilan data. Terdapat sintax $query = "DELETE FROM data WHERE id = '$id' "; yang berfungsi untuk mengkoneksikan ke database MySQL bahwa data tersebut dihapus. 

8.	cetak.php cetak.php adalah file yang digunakan untuk mencetak data Relawan covid-19 pada masing-masing provinsi. Terdapat sintax window.print(); yang digunakan untuk mencetak sebuah halaman website. File dokemen hasil cetak dalam format 

PDF. 

9. logout.php Logout.php adalah file yang digunakan untuk proses keluar dari program aplikasi. Logout ini untuk menjaga keamanan sebuah akun agar tidak digunakan oleh orang lain. Terdapat sintax session_destroy(); yang berfungsi untuk menghapus semua session data di server. Setelah berhasil melakukan logout, user akan diarahkan kembali ke halaman login.php.
