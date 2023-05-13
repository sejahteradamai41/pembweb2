<?php
// create edit product php
require_once "../../layout/header.php";

$id = $_GET['id'];

$motor = query("SELECT * FROM motor WHERE id = $id")[0];

$merk_id = $motor['merk_id'];
$tipe_motor_id = $motor['tipe_motor_id'];

$merk_selected = query("SELECT * FROM merk WHERE id = $merk_id")[0];
$tipe_motor_selected = query("SELECT * FROM tipe_motor WHERE id = $tipe_motor_id")[0];

$merk = query("SELECT * FROM merk");
$tipe_motor = query("SELECT * FROM tipe_motor");

function editMotor($data)
{
    global $conn;
    $id = $data["id"];
    $nama_motor = htmlspecialchars($data["nama_motor"]);
    $cc = htmlspecialchars($data["cc"]);
    $tipe_motor_id = htmlspecialchars($data["tipe_motor_id"]);
    $harga = htmlspecialchars($data["harga"]);
    $merk_id = htmlspecialchars($data["merk_id"]);
    $stok = htmlspecialchars($data["stok"]);

    $query = "UPDATE motor SET
                nama_motor = '$nama_motor',
                cc = '$cc',
                tipe_motor_id = '$tipe_motor_id',
                harga = '$harga',
                merk_id = '$merk_id',
                stok = '$stok'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

if (isset($_POST["edit"])) {
    if (editMotor($_POST) > 0) {
        echo "
        <script>
            alert('Motor berhasil diedit');
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
                <h2 class="py-4 text-center fw-bolder">Edit Motor</h2>
                <form action="" method="POST">

                    <input type="hidden" name="id" value="<?= $motor['id']; ?>">

                    <div class="mb-3">
                        <label for="nama_motor" class="form-label">Nama Motor</label>
                        <input type="text" class="form-control" id="nama_motor" name="nama_motor" required value="<?= $motor["nama_motor"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="cc" class="form-label">CC</label>
                        <input type="text" class="form-control" id="cc" name="cc" required value="<?= $motor["cc"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tipe_motor" class="form-label">Tipe Motor</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="tipe_motor_id" required>
                            <option selected value="<?= $motor["tipe_motor_id"]; ?>"><?= $tipe_motor_selected["tipe_motor"]; ?> </option>
                            <?php foreach ($tipe_motor as $tm) : ?>
                                <option value="<?= $tm['id']; ?>"><?= $tm['tipe_motor']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" min="0" class="form-control" id="harga" name="harga" required value="<?= $motor["harga"]; ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="merk_id" required>
                            <option selected value="<?= $motor["merk_id"] ?>"><?= $merk_selected["nama_merk"]; ?></option>
                            <?php foreach ($merk as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['nama_merk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" min="0" class="form-control" id="stok" name="stok" required value="<?= $motor["stok"]; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="motor.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Motor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>