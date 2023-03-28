<?php 
require_once '../../database/dbkoneksi.php';
include_once "../tamplate/head.php";
include_once "../tamplate/navbar.php";
?>
            
<div class="container">
    <h2 class="text-center">Form Produk</h2>
    <form method="POST" action="../../process/produk/proses_produk.php">
        <div class="form-group">
            <label for="kode" class="form-label">Kode</label>
            <input id="kode" name="kode" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Produk</label>
            <input id="nama" name="nama" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input id="harga_beli" name="harga_beli" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="stok" class="form-label">Stok</label>
            <input id="stok" name="stok" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="min_stok" class="form-label">Minimum Stok</label>
            <input id="min_stok" name="min_stok" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis" class="form-label">Jenis Produk</label>
            <?php 
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="jenis" name="jenis" class="form-control">
                <?php 
            foreach($rsjenis as $rowjenis){
            ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                <?php
            }
            ?>
            </select>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>