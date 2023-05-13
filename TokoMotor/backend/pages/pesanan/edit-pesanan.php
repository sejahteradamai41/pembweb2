<?php
require_once "../../layout/header.php";
$id = $_GET['id'];

$pesanan = query("SELECT * FROM pesanan WHERE id = $id")[0];

$motor_id = $pesanan['motor_id'];
$motor_selected = query("SELECT * FROM motor WHERE id = $motor_id")[0];

$motor = query("SELECT * FROM motor");

function edit_pesanan($data)
{
    global $conn;

    $id = $data['id'];
    $nama_pelanggan = htmlspecialchars($data['nama_pelanggan']);
    $alamat = htmlspecialchars($data['alamat']);
    $motor_id = htmlspecialchars($data['motor_id']);
    $quantity = htmlspecialchars($data['quantity']);

    mysqli_query($conn, "UPDATE pesanan SET nama_pelanggan = '$nama_pelanggan', alamat_pelanggan = '$alamat', motor_id = '$motor_id', quantity = '$quantity' WHERE id = $id");

    return mysqli_affected_rows($conn);
};

if (isset($_POST['edit'])) {
    if (edit_pesanan($_POST) > 0) {
        echo "
            <script>
                alert('Pesanan berhasil diedit');
                document.location.href = 'pesanan.php';
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Edit Pesanan</h2>
                <form action="" method="POST">

                    <input type="hidden" name="id" value="<?= $pesanan['id']; ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama" name="nama_pelanggan" required value="<?= $pesanan['nama_pelanggan']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= $pesanan['alamat_pelanggan']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="motor" class="form-label">Motor</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="motor_id" required>
                            <option selected value="<?= $motor_selected['id']; ?>"><?= $motor_selected['nama_motor']; ?></option>
                            <?php foreach ($motor as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['nama_motor']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required value="<?= $pesanan['quantity']; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="pesanan.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Pesanan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>