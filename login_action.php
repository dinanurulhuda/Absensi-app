<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($db, "SELECT * FROM tabel_user WHERE username = '".$username."' AND '".$password."'");
$jumlah = mysqli_num_rows($query);

if($jumlah > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['id_user'] = $row['id_user'];        
    $_SESSION['username'] = $row['username'];        
    $_SESSION['nama'] = $row['nama'];        
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    
    echo "<script>alert('Login Berhasil')</script>";
    echo "<script>location = 'index2.php?p=home'</script>";
}else{
    echo"<script>alert('Password Salah')</script>";
    echo "<script>location = 'index.php?p=login'</script>";
}

?>