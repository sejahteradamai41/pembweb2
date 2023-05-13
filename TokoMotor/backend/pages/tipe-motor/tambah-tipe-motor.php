<?php
require_once "../../layout/header.php";

function tambah_tipe_motor($data)
{
    global $conn;
    $name = htmlspecialchars($data["name"]);

    $query = "INSERT INTO tipe_motor VALUES ('', '$name')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

if (isset($_POST["tambah"])) {
    if (tambah_tipe_motor($_POST) > 0) {
        echo "
        <script>
            alert('Tipe Motor berhasil ditambahkan');
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
                <h2 class="py-4 text-center fw-bolder">Tambah Tipe Motor</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Tipe Motor</label>
                        <input type="text" class="form-control" id="nama" name="name" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="tipe-motor.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="tambah">Tambah Tipe Motor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>