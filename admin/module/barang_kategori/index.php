<!DOCTYPE <html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang dan Kategori</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        
    </div>
</body>
</html>

<?php

$sql = "SELECT barang.id_barang, kategori.nama_kategori, barang.nama_barang, barang.merk, barang.stok, barang.harga_beli, barang.harga_jual, barang.satuan_barang, barang.tgl_input
        FROM barang
        JOIN kategori ON barang.id_kategori = kategori.id_kategori";
$row = $config->prepare($sql);
$row->execute();
$hasil = $row->fetchAll();
?>

<div class="card card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="example1">
            <thead>
                <tr style="background: #ffe4e6; color: #333;">
                    <th>No.</th>
                    <th>ID Barang</th>
                    <th>Kategori</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($hasil as $isi) {
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $isi['id_barang']; ?></td>
                    <td><?php echo $isi['nama_kategori']; ?></td>
                    <td><?php echo $isi['nama_barang']; ?></td>
                    <td><?php echo $isi['merk']; ?></td>
                    <td><?php echo $isi['stok']; ?></td>
                    <td>Rp.<?php echo number_format($isi['harga_beli']); ?>,-</td>
                    <td>Rp.<?php echo number_format($isi['harga_jual']); ?>,-</td>
                    <td><?php echo $isi['satuan_barang']; ?></td>
                    <td>
                        <a href="index.php?page=barang/details&barang=<?php echo $isi['id_barang']; ?>">
                            <button class="btn btn-primary btn-xs">Details</button>
                        </a>
                        <a href="index.php?page=barang/edit&barang=<?php echo $isi['id_barang']; ?>">
                            <button class="btn btn-success btn-xs">Edit</button>
                        </a>
                        <a href="fungsi/hapus/hapus.php?barang=hapus&id=<?php echo $isi['id_barang']; ?>"
                           onclick="javascript:return confirm('Hapus Data barang ?');">
                            <button class="btn btn-danger btn-xs">Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php 
                $no++; 
                } 
                ?>
            </tbody>
        </table>
    </div>
</div>