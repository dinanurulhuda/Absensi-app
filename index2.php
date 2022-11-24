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

<body>
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a>
                    <img src="images/MI.2.png" alt="Manajemen Informatika" width="30px" height="30px"/>
                    <label>Manajemen Informatika</label>
                </a>
            </div>
            
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index2.php?p=home"><i class="fa fa-home">     Home</i></a>
                        <li>
                            <a href="index2.php?p=pilih_kelas"><i class="fa fa-edit">     Jadwal Kuliah</i></a>
                        </li> 
                        <li>
                            <a href="index2.php?p=mahasiswa"><i class="fa fa-graduation-cap">     Data Mahasiswa</i></a>
                        </li> 
                        <li>
                            <a href="index2.php?p=pilih_jk"><i class="fa fa-group">    Absen Mahasiswa</i></a>
                        </li>
                        <li>
                            <a href="index2.php?p=laporan_mahasiswa"><i class="fa fa-id-badge">     Laporan Data Mahasiswa</i></a>
                        </li>
                        <li>
                            <a href="index2.php?p=laporan_jadwal"><i class="fa fa-vcard">     Laporan Jadwal Perkelas</i></a>
                        </li>
                        <li>
                            <a href="index2.php?p=laporan_kehadiran"><i class="fa fa-files-o">     Laporan Kehadiran</i></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                   
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/dina.jpg" alt="Dina Nurulhuda" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Dina Nurulhuda</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/dina.jpg" alt="Dina Nurulhuda" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Dina Nurulhuda</a>
                                                    </h5>
                                                    <span class="email">dinanurulhuda06@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="index.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <div class="col-md-auto col-sm-auto  ">
                <div class="x_panel">
                    <div class="bs-example" data-example-id="simple-jumbotron">
            <div class="jumbotron">
                <div class="col">
        <?php
        $p=isset($_GET['p']) ? $_GET['p'] : 'home';
        if ($p=='home') include('home.php');
        if ($p=='mahasiswa') include('mahasiswa.php');
        if ($p=='form_mhs') include('form_mhs.php');
        if ($p=='aksi_tambah') include('aksi_tambah.php');
        if ($p=='ListMhs') include('ListMhs.php');
        if ($p=='edit_mhs') include('edit_mhs.php');
        if ($p=='Hapus') include('Hapus.php');
        if ($p=='absen_mk') include('absen_mk.php');
        if ($p=='absen_masuk') include('absen_masuk.php');
        if ($p=='absen_keluar') include('absen_keluar.php');
        if ($p=='laporan_mahasiswa') include('laporan_mahasiswa.php');
        if ($p=='laporan_kehadiran') include('laporan_kehadiran.php');
        if ($p=='laporan_jadwal') include('laporan_jadwal.php');
        if ($p=='aksi_absen') include('aksi_absen.php');
        if ($p=='record_absen') include('record_absen.php');
        if ($p=='pilih_kelas') include('pilih_kelas.php');
        if ($p=='kelas') include('kelas.php');
        if ($p=='jadwal_kuliah') include('jadwal_kuliah.php');
        if ($p=='laporan_jadwal_kuliah') include('laporan_jadwal_kuliah.php');
        if ($p=='absen_jk') include('absen_jk.php');
        if ($p=='pilih_jk') include('pilih_jk.php');
        if ($p=='absen') include('absen.php');
        if ($p=='laporan_hadir_perkelas') include('laporan_hadir_perkelas.php');

        ?> 
        </div>
        </div>
    </div>
</div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
