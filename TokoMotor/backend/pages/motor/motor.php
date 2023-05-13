<?php
require_once "../../layout/header.php";
$motor = query("SELECT motor.*, merk.nama_merk, tipe_motor.tipe_motor FROM ((motor INNER JOIN merk ON motor.merk_id = merk.id) INNER JOIN tipe_motor ON motor.tipe_motor_id = tipe_motor_id) GROUP BY motor.id");
?>

<div class="d-flex justify-content-end mb-3">
    <a href="add-motor.php" class="btn btn-primary">Tambahkan Motor</a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Motor
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Motor</th>
                    <th>CC</th>
                    <th>Tipe Motor</th>
                    <th>Harga</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($motor as $m) : ?>
                    <tr>
                        <td><?= $m["id"]; ?></td>
                        <td><?= $m["nama_motor"]; ?></td>
                        <td><?= $m["cc"]; ?></td>
                        <td><?= $m["tipe_motor"]; ?></td>
                        <td>Rp. <?= number_format($m["harga"]); ?></td>
                        <td><?= $m["nama_merk"]; ?></td>
                        <td><?= $m["stok"]; ?></td>
                        <td>
                            <a href="edit-motor.php?id=<?= $m['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete-motor.php?id=<?= $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>

<?php require_once "../../layout/footer.php" ?>