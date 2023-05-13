<?php
require_once "../../layout/header.php";
$id = $_GET['id'];
$tipe_motor = query("SELECT * FROM tipe_motor WHERE id = $id")[0];

function edit_tipe_motor($data)
{
    global $conn;
    $id = $data["id"];
    $tipe_motor = htmlspecialchars($data["name"]);

    $query = "UPDATE tipe_motor SET
                tipe_motor = '$tipe_motor'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

if (isset($_POST["edit"])) {
    if (edit_tipe_motor($_POST) > 0) {
        echo "
        <script>
            alert('Tipe Motor berhasil diedit');
            document.location.href = 'tipe-motor.php';
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
                <h2 class="py-4 text-center">Edit Tipe Motor</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $tipe_motor['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="name" required value="<?= $tipe_motor['tipe_motor']; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="tipe-motor.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Tipe Motor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>