<?php
require_once "../../layout/header.php";
$tipe_motor = query("SELECT * FROM tipe_motor");
?>

<div class="d-flex justify-content-end mb-3">
    <a href="tambah-tipe-motor.php" class="btn btn-primary">Tambah Tipe Motor</a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Tipe Motor
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipe Motor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipe_motor as $p) : ?>
                    <tr>
                        <td><?= $p["id"]; ?></td>
                        <td><?= $p["tipe_motor"]; ?></td>
                        <td>
                            <a href="edit-tipe-motor.php?id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete-tipe-motor.php?id=<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</a>
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