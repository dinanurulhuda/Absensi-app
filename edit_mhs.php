<?php
    include "koneksi.php";
    $ambil = mysqli_query($db, "SELECT * FROM tabel_mahasiswa WHERE nim ='$_GET[nim]'");
    $data = mysqli_fetch_array($ambil);
  ?>

<div class="container">
    <div class="col">
            <div class="card">
                <div class="card-header">
                    <center> Form Edit Data Mahasiswa</center>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" aria-describedby="emailHelp" value="<?php echo $data['nim']?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama']?>">
                        </div>
                        <div class="mb-3">
                            <label for="ttl" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control" id="ttl"  value="<?php echo $data['ttl']?>">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?php echo $data['jenis_kelamin']?>"> 
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <div class="form-floating">
                                <textarea class="form-control" name="alamat" id="floatingTextarea2"
                                    style="height: 100px"><?php echo $data['alamat']?></textarea>

                            </div>
                            <div class="form-group">
                        <label for="prodi" class="form-label">Pilih Prodi</label>
                        <select class="form-control" name="prodi">
                            
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel prodi
                            $sql="select * from tabel_prodi";
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            $ket="";
                            if (isset($_GET['prodi'])) {
                            $prodi = trim($_GET['prodi']);
                            if ($prodi==$data['kode_prodi'])
                            {
                                $ket="selected";
                            }
                            }
                            ?>
                                <option <?php echo $ket; ?> value="<?php echo $data['kode_prodi'];?>">
                                <?php echo$data['nama_prodi'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                        </div>
                        </div>

                        <button style="float : right" type="submit" name="submit"
                            class="btn btn-primary">Simpan</button>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $q = mysqli_query($db, "UPDATE tabel_mahasiswa SET nim='$_POST[nim]',nama='$_POST[nama]',ttl='$_POST[ttl]',jenis_kelamin='$_POST[jenis_kelamin]',alamat='$_POST[alamat]',kode_prodi='$_POST[prodi]' WHERE nim='$_GET[nim]'");

                    if ($q) {
                            echo "<script>alert('Data berhasil di edit!')</script>";
                            echo "<script>window.location='index2.php?p=ListMhs'</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

