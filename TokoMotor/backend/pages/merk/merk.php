<?php
require_once "../../layout/header.php";
$merk = query("SELECT * FROM merk");
?>

<div class="d-flex justify-content-end mb-3">
    <a href="tambah-merk.php" class="btn btn-primary">Tambah Merk</a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Merk
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Merk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($merk as $p) : ?>
                    <tr>
                        <td><?= $p["id"]; ?></td>
                        <td><?= $p["nama_merk"]; ?></td>
                        <td>
                            <a href="edit-merk.php?id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete-merk.php?id=<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</a>
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