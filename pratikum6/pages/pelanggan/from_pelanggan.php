<?php 
require_once '../../database/dbkoneksi.php';
include_once "../tamplate/head.php";
include_once "../tamplate/navbar.php";
?>
            
            <div class="container">
    <h2 class="text-center">Tambah Pelanggan</h2>
    <form method="POST" action="proses_pelanggan.php">
        <div class="form-group">
            <label for="kode" class="form-label">Kode</label>
            <input id="kode" name="kode" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Pelanggan</label>
            <input id="nama" name="nama" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga_beli" class="form-label">Jenis Kelamin</label><br>
            <select name="jk" id="jk" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="stok" class="form-label">Tempat Lahir</label>
            <input id="tmp_lahir" name="tmp_lahir" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="min_stok" class="form-label">Tanggal Lahir</label>
            <input id="tgl_lahir" name="tgl_lahir" required type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="min_stok" class="form-label">Email</label>
            <input id="email" name="email" required type="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis" class="form-label">Kartu</label>
            <?php
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="kartu_id" name="kartu_id" class="form-control">
                <?php
                foreach ($rsjenis as $rowjenis) {
                ?>
                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>
