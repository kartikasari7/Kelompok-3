
<?php 
    $id = $_SESSION['admin']['id_member'];
    $hasil_profil = $lihat -> member_edit($id);
?>

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #881337;">


   
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <img src="assets/img/icon/logozafka.png" 
            alt="Logo Zafkabeauty " 
            class="sidebar-brand-icon" 
            style="width: 50px; height: 50px; border-radius: 5px;"> <!-- Ganti dengan path gambar yang sesuai -->
        <div class="sidebar-brand-text mx-3">Zafkabeauty<sup></sup></div>
    </a>

    
    <hr class="sidebar-divider my-0">

    
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <hr class="sidebar-divider">
    <!-- Heading -->
    <!-- <div class="sidebar-heading">
           Master
       </div> -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-database"></i>
            <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="index.php?page=barang">Barang</a>
                <a class="collapse-item" href="index.php?page=kategori">Kategori</a>
                <a class="collapse-item" href="index.php?page=barang_kategori">Barang & Kategori</a>
            </div>
        </div>
    </li>

    
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
            aria-controls="collapse3">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="index.php?page=jual">Transaksi Jual</a>
                <a class="collapse-item" href="index.php?page=laporan">Laporan Penjualan</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="index.php?page=pengaturan">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Pengaturan Toko</span></a>
    </li>
   
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<div id="content-wrapper" class="d-flex flex-column">

    
    <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <h5 class="d-lg-block d-none mt-2"><b><?php echo $toko['nama_toko'];?>, <?php echo $toko['alamat_toko'];?></b></h5>
        
            <ul class="navbar-nav ml-auto">
                <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle"
                            src="assets/img/user/<?php echo $hasil_profil['gambar'];?>">
                        <span
                            class="mr-2 d-none d-lg-inline text-gray-600 small ml-2"><?php echo $hasil_profil['nm_member'];?></span>
                        <i class="fas fa-angle-down"></i>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?page=user">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">