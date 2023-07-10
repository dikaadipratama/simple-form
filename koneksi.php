<?php
// buat koneksi dengan database mysql
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pendaftaran_mhs_baru_fikom');

/* mencoba Menghubungkan koneksi ke MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//periksa koneksi, tampilkan pesan kesalahan jika gagal
if($link === false){
  die("Koneksi dengan database gagal. " . mysqli_connect_error());
}

?>