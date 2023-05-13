<?php
// create edit product php
require_once "../../layout/header.php";

$merk = query("SELECT * FROM merk");
$tipe_motor = query("SELECT * FROM tipe_motor");

function tambahMotor($data)
{
    global $conn;
    $nama_motor = htmlspecialchars($data["nama_motor"]);
    $cc = htmlspecialchars($data["cc"]);
    $tipe_motor_id = htmlspecialchars($data["tipe_motor_id"]);
    $harga = htmlspecialchars($data["harga"]);
    $merk_id = htmlspecialchars($data["merk_id"]);
    $stok = htmlspecialchars($data["stok"]);

    $query = "INSERT INTO motor VALUES ('', '$nama_motor', '$cc', '$tipe_motor_id', '$harga', '$merk_id', '$stok')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

if (isset($_POST["tambah"])) {
    if (tambahMotor($_POST) > 0) {
        echo "
        <script>
            alert('Motor berhasil ditambahkan');
            document.location.href = 'motor.php';
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
                <h2 class="py-4 text-center fw-bolder">Tambah Motor</h2>
                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="nama_motor" class="form-label">Nama Motor</label>
                        <input type="text" class="form-control" id="nama_motor" name="nama_motor" required>
                    </div>

                    <div class="mb-3">
                        <label for="cc" class="form-label">CC</label>
                        <input type="text" class="form-control" id="cc" name="cc" required>
                    </div>

                    <div class="mb-3">
                        <label for="tipe_motor" class="form-label">Tipe Motor</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="tipe_motor_id" required>
                            <option selected value="">Pilih Tipe Motor</option>
                            <?php foreach ($tipe_motor as $tm) : ?>
                                <option value="<?= $tm['id']; ?>"><?= $tm['tipe_motor']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" min="0" class="form-control" id="harga" name="harga" required>
                    </div>

                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="merk_id" required>
                            <option selected value="">Pilih Merk</option>
                            <?php foreach ($merk as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['nama_merk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" min="0" class="form-control" id="stok" name="stok" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="motor.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="tambah">Tambah Motor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>