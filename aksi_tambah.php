<?php
include 'koneksi.php';
// Koneksi Database

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama'];
$ttl = $_POST['ttl'];
$ttl = date('Y-m-d', strtotime($ttl));
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nama_prodi = $_POST['prodi'];
$nama_kelas = $_POST['kelas'];

// menangkap data yang dikirim dari form

mysqli_query($db, "insert into tabel_mahasiswa(nim,nama,ttl,jenis_kelamin,alamat,kode_prodi,id_kelas) value('$nim','$nama_mhs','$ttl','$jenis_kelamin','$alamat','$nama_prodi','$nama_kelas')");
//menginput data ke database

header("location:index2.php?p=ListMhs");
//mengalihkan halaman kembali ke tampil_data.php
