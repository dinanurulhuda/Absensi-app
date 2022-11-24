<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>APLIKASI ABSENSI MAHASISWA</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<div class="container">
    <div class="row mt-3">
    <center><h1>LAPORAN MAHASISWA PROGRAM STUDI MANAJEMEN INFORMATIKA</h1></center>
        <table class="table table-striped table-hover">
            <tr>
                <th><center>No</center></th>
                <th><center>Nim</center></th>
                <th><center>Nama</center></th>
                <th><center>Tanggal Lahir</center></th>
                <th><center>Jenis kelamin</center></th>
                <th><center>Alamat</center></th>
                <th><center>Prodi</center></th>  
            </tr>
            <?php
            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT * FROM  tabel_mahasiswa JOIN tabel_prodi USING(kode_prodi)");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><center><?php echo $no_urut++; ?></center></td>
                    <td><center><?php echo $d['nim']; ?></center></td>
                    <td><center><?php echo $d['nama']; ?></center></td>
                    <td><center><?php echo $d['ttl']; ?></center></td>
                    <td><center><?php echo $d['jenis_kelamin']; ?></center></td>
                    <td><center><?php echo $d['alamat']; ?></center></td>
                    <td><center><?php echo $d['nama_prodi']; ?></center></td>
                </tr>

                <?php
                }
                ?>

        </table>
            </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script type="text/javascript">
	window.print();

  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>