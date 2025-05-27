<h3 style="
    font-size: 2.5rem; /* Memperbesar ukuran teks */ 
    margin-bottom: 50px; 
    background: linear-gradient(to right, #881337, #fda4af); /* Gradasi warna */
    -webkit-background-clip: text; /* Memotong background untuk teks */
    -webkit-text-fill-color: transparent; /* Mengisi teks dengan transparan */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Memberi shadow */">
    <strong>Dashboard</strong>
</h3>

<br/>
<?php 	$sql=" select * from barang where stok <= 3";
	$row = $config -> prepare($sql);
	$row -> execute();
	$r = $row -> rowCount();
	if($r > 0){
?>
<?php
		echo "
		<div class='alert alert-warning'>
			<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
			<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";	
	}
?>

<?php $hasil_barang = $lihat -> barang_row();?>
<?php $hasil_kategori = $lihat -> kategori_row();?>
<?php $stok = $lihat -> barang_stok_row();?>
<?php $jual = $lihat -> jual_row();?>
<div class="row">
    
    <div class="col-md-3 mb-3">
        <div class="card shadow" style="border-radius: 15px; overflow: hidden;">
            <div class="card-header" style="background: linear-gradient(to right, #fda4af, #881337);">
                <h6 class="pt-2" style="color: #fff; font-weight: bold;">
                    <i class="fas fa-cubes"></i> Nama Barang
                </h6>
            </div>
            <div class="card-body">
                <center>
                    <h1 style="font-size: 2.5rem; color: #881337;"><?php echo number_format($hasil_barang);?></h1>
                </center>
            </div>
            <div class="card-footer" style="background: #f8f9fa;">
                <a href='index.php?page=barang' style="color: #881337;">
                    Tabel Barang <i class='fa fa-angle-double-right'></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow" style="border-radius: 15px; overflow: hidden;">
            <div class="card-header" style="background: linear-gradient(to right, #fda4af, #881337);">
                <h6 class="pt-2" style="color: #fff; font-weight: bold;"><i class="fas fa-chart-bar"></i> Stok Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1 style="font-size: 2.5rem; color: #881337;"><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer" style="background: #f8f9fa;">
                <a href='index.php?page=barang' style="color: #881337;">Tabel Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow" style="border-radius: 15px; overflow: hidden;">
            <div class="card-header" style="background: linear-gradient(to right, #fda4af, #881337);">
                <h6 class="pt-2" style="color: #fff; font-weight: bold;"><i class="fas fa-upload"></i> Telah Terjual</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1 style="font-size: 2.5rem; color: #881337;"><?php echo number_format($jual['stok']);?></h1>
                </center>
            </div>
            <div class="card-footer" style="background: #f8f9fa;">
                <a href='index.php?page=laporan' style="color: #881337;">Tabel laporan <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow" style="border-radius: 15px; overflow: hidden;">
            <div class="card-header" style="background: linear-gradient(to right, #fda4af, #881337);">
                <h6 class="pt-2" style="color: #fff; font-weight: bold;"><i class="fa fa-bookmark"></i> Kategori Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1 style="font-size: 2.5rem; color: #881337;"><?php echo number_format($hasil_kategori);?></h1>
                </center>
            </div>
            <div class="card-footer" style="background: #f8f9fa;">
                <a href='index.php?page=kategori' style="color: #881337;">Tabel Kategori <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>
</div>