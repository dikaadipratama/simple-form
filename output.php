<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output Data Mahasiswa Baru</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                    <h2 class="pull-left text-center">Output Data Mahasiswa Baru</h2>
                    <a href="logout.php" class="btn btn-danger pull-right" style="width: 115px;">Logout</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "koneksi.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM data_mhs_baru";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped' width='200px'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>NO DAFTAR</th>";
                                        echo "<th>NAMA</th>";
                                        echo "<th>NIK</th>";
                                        echo "<th>TEMPAT LAHIR</th>";
                                        echo "<th>TGL LAHIR</th>";
                                        echo "<th>JK</th>";
                                        echo "<th>KEWARGANEGARAAN</th>";
                                        echo "<th>AGAMA</th>";
                                        echo "<th>NAMA IBU</th>";
                                        echo "<th>EMAIL</th>";
                                        echo "<th>NO TELP</th>";
                                        echo "<th>ALAMAT</th>";
                                        echo "<th>KODE POS</th>";
                                        echo "<th>PROVINSI</th>";
                                        echo "<th>KABUPATEN</th>";
                                        echo "<th>KECAMATAN</th>";
                                        echo "<th>PENDIDIKAN</th>";
                                        echo "<th>SEKOLAH</th>";
                                        echo "<th>NILAI RAPOT</th>";
                                        echo "<th>PROGDI1</th>";
                                        echo "<th>PROGDI2</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['no_daftar'] . "</td>";
                                        echo "<td>" . $row['nama'] . "</td>";
                                        echo "<td>" . $row['nik'] . "</td>";
                                        echo "<td>" . $row['tempat_lahir'] . "</td>";
                                        echo "<td>" . $row['tgl_lahir'] . "</td>";
                                        echo "<td>" . $row['jk'] . "</td>";
                                        echo "<td>" . $row['kewarganegaraan'] . "</td>";
                                        echo "<td>" . $row['agama'] . "</td>";
                                        echo "<td>" . $row['nama_ibu'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['no_telp'] . "</td>";
                                        echo "<td>" . $row['alamat'] . "</td>";
                                        echo "<td>" . $row['kode_pos'] . "</td>";
                                        echo "<td>" . $row['provinsi'] . "</td>";
                                        echo "<td>" . $row['kabupaten'] . "</td>";
                                        echo "<td>" . $row['kecamatan'] . "</td>";
                                        echo "<td>" . $row['pendidikan'] . "</td>";
                                        echo "<td>" . $row['sekolah'] . "</td>";
                                        echo "<td>" . $row['nilai_rapot'] . "</td>";
                                        echo "<td>" . $row['progdi1'] . "</td>";
                                        echo "<td>" . $row['progdi2'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>