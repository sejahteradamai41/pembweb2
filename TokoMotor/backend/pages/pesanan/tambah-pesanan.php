<?php
require_once "../../layout/header.php";

$motor = query("SELECT * FROM motor");

function tambah_pesanan($data)
{
    global $conn;

    $nama_pelanggan = htmlspecialchars($data['nama_pelanggan']);
    $alamat = htmlspecialchars($data['alamat']);
    $motor_id = htmlspecialchars($data['motor_id']);
    $quantity = htmlspecialchars($data['quantity']);

    $query = "INSERT INTO pesanan VALUES ('', '$nama_pelanggan', '$alamat', '$motor_id', '$quantity')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if (isset($_POST['tambah'])) {
    if (tambah_pesanan($_POST) > 0) {
        echo "
            <script>
                alert('Pesanan berhasil ditambahkan');
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
                <h2 class="py-4 text-center fw-bolder">Tambah Pesanan</h2>
                <form action="" method="POST">

                    <!-- nama pelanggan -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama" name="nama_pelanggan" required>
                    </div>

                    <!-- alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>

                    <!-- select motor -->
                    <div class="mb-3">
                        <label for="motor" class="form-label">Motor</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="motor_id" required>
                            <option selected value="">Pilih Motor</option>
                            <?php foreach ($motor as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['nama_motor']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- quantity -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="tipe-motor.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="tambah">Tambah Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>