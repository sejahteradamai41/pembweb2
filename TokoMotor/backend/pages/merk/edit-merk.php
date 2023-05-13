<?php
require_once "../../layout/header.php";
$id = $_GET['id'];
$merk = query("SELECT * FROM merk WHERE id = $id")[0];

function edit_merk($data)
{
    global $conn;

    $id = $data['id'];
    $name = htmlspecialchars($data['name']);

    mysqli_query($conn, "UPDATE merk SET nama_merk = '$name' WHERE id = $id");

    return mysqli_affected_rows($conn);
}

if (isset($_POST['edit'])) {
    if (edit_merk($_POST) > 0) {
        echo "
            <script>
                alert('Merk berhasil diedit');
                document.location.href = 'merk.php';
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
                <h2 class="py-4 text-center">Edit Merk</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $merk['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="name" required value="<?= $merk['nama_merk']; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="tipe-motor.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Merk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>