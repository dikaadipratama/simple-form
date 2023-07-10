<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru FIKOM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery/jquery-3.4.1.js"></script>
</head>
<body>
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-form-title"></div>
      <h5 class="login100-form-title-1">Form Pendaftaran Mahasiswa Baru FIKOM</h5>
        <div class="container p-3 my-3">
        <?php
        //Include file koneksi, untuk koneksikan ke database
        include "koneksi.php";
      
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nama=input($_POST["nama"]);
          $nik=input($_POST["nik"]);
          $tempat_lahir=input($_POST["tempat_lahir"]);
          $tgl_lahir=input($_POST["tgl_lahir"]);
          $jk=input($_POST["jk"]);
          $kewarganegaraan=input($_POST["kewarganegaraan"]);
          $agama=input($_POST["agama"]);
          $nama_ibu=input($_POST["nama_ibu"]);
          $email=input($_POST["email"]);
          $no_telp=input($_POST["no_telp"]);
          $alamat=input($_POST["alamat"]);
          $kode_pos=input($_POST["kode_pos"]);
          $provinsi=input($_POST["provinsi"]);
          $kabupaten=input($_POST["kabupaten"]);
          $kecamatan=input($_POST["kecamatan"]);
          $pendidikan=input($_POST["pendidikan"]);
          $sekolah=input($_POST["sekolah"]);
          $nilai_rapot=input($_POST["nilai_rapot"]);
          $progdi1=input($_POST["progdi1"]);
          $progdi2=input($_POST["progdi2"]);

          //Query input menginput data kedalam tabel data mhs baru
          $sql="INSERT INTO data_mhs_baru (nama,nik,tempat_lahir,tgl_lahir,jk,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_rapot,progdi1,progdi2) VALUES
          ('$nama','$nik','$tempat_lahir','$tgl_lahir',$jk,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_rapot,'$progdi1','$progdi2')";

          //Mengeksekusi/menjalankan query diatas
          $hasil=mysqli_query($link,$sql);

          //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
          if ($hasil) { 
              echo "<div class='alert alert-success'> Selamat $nama! Anda telah berhasil mendaftar.</div>"; 
          }
          else {
              echo "<div class='alert alert-danger'> Pendaftaraan Gagal, pastikan semua data telah terisi dengan benar.</div>";
          }
        }
        ?>
        <a href="output.php" class="btn btn-back pull-right">Lihat Hasil</a>
      </div>
    </div>
  </div>
</body>
</html>
