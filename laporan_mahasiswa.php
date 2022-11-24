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
        <a href="print_data.php" class="btn btn-danger">PRINT</a>
            </div>
    </div>
</div>