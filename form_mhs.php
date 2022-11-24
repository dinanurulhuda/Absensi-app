<div class="container">
    <div class="col">
            <div class="card">
                <div class="card-header">
                    <center> Form Data Mahasiswa</center>
                </div>
                <div class="card-body">
                    <form action="aksi_tambah.php" method="post">
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="text" name="nim" class="form-control" id="nim" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="ttl" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control" id="ttl">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        </div>
                        <div class="mb-3">
                            <label for="alamt" class="form-label">Alamat</label>
                            <div class="form-floating">
                                <textarea class="form-control" name="alamat" id="floatingTextarea2"
                                    style="height: 100px"></textarea>

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
                        <div class="form-group">
                        <label for="prodi" class="form-label">Pilih Kelas</label>
                        <select class="form-control" name="kelas">
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel prodi
                            $sql="select * from tabel_kelas";
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            $ket="";
                            if (isset($_GET['kelas'])) {
                            $kelas = trim($_GET['kelas']);
                            if ($kelas==$data['id_kelas'])
                            {
                                $ket="selected";
                            }
                            }
                            ?>
                                <option <?php echo $ket; ?> value="<?php echo $data['id_kelas'];?>">
                                <?php echo$data['nama_kelas'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                        </div>

                        <button style="float : right" type="submit" name="submit"
                            class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

