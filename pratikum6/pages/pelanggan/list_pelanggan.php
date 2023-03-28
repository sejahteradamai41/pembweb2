<?php 
require_once '../../database/dbkoneksi.php';
include_once "../tamplate/head.php";
include_once "../tamplate/navbar.php";
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

<div class="container">
    <h2 class="text-center mb-3">List Pelanggan</h2>
    <a class="btn btn-success mb-3" href="form_pelanggan.php" role="button">Create Pelanggan</a>
    <div class="table-responsive">
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor  = 1; foreach ($rs as $row) { ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $row['kode'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jk'] ?></td>
                    <td><?= $row['tmp_lahir'] ?></td>
                    <td><?= $row['tgl_lahir'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['kartu_id'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                        <a class="btn btn-primary" href="edit_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                        <a class="btn btn-primary"
                            href="../../process/pelanggan/delete_pelanggan.php?iddel=<?= $row['id'] ?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data pelanggan <?= $row['nama'] ?>?')) {return false}">Delete</a>
                    </td>
                </tr>
                <?php $nomor++; } ?>
            </tbody>
        </table>
    </div>
</div>