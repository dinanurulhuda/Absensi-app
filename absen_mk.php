<?php 
	include 'koneksi.php';
?>
<div class="col">
<br>
<div class="col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel"><div class="form-group">
        <center><h2>Jadwal Kuliah</h2></center>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                            <th class="column-title"><center>No</center></th>
                            <th class="column-title"><center>Nama Dosen</center></th>
                                <th class="column-title"><center>Nama Mata Kuliah</center></th>
                                <th class="column-title"><center>Jam</center></th>
                                <th class="column-title"><center>Hari</center></th>
                                <th class="column-title"><center>Ambil Absen</center></th>
                            </tr>
                        </thead>
                        <?php
                             {
                                $sql="SELECT * FROM tabel_jadwal_kuliah JOIN tabel_kelas USING(id_kelas) JOIN tabel_hari USING(id_hari) JOIN tabel_matakuliah USING(kode_mk) join tabel_dosen USING(nip) WHERE id_kelas='$_GET[id_kelas]'";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                            <td><center><?php echo $no;?></center></td>
                                <td><center><?php echo $data["nama"]; ?></center></td>
                                <td><center><?php echo $data["nama_mk"]; ?></center></td>
                                <td><center><?php echo $data["jam"]; ?></center></td>
                                <td><center><?php echo $data["nama_hari"]; ?></center></td>
                                <td><center><a href="index2.php?p=absen&id_kelas=<?php echo $data["id_kelas"]; ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i></a></center></td>
                            </tr>
                        </tbody>
                        <?php
    }
    ?>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>