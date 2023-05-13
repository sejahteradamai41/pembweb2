<?php
require_once "../../layout/header.php";

function tambahMerk($data)
{
    global $conn;
    $nama_merk = htmlspecialchars($data["nama_merk"]);

    $query = "INSERT INTO merk VALUES ('', '$nama_merk')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

if (isset($_POST["tambah"])) {
    if (tambahMerk($_POST) > 0) {
        echo "
        <script>
            alert('Merk berhasil ditambahkan');
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
                <h2 class="py-4 text-center fw-bolder">Tambah Merk</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Merk</label>
                        <input type="text" class="form-control" id="nama" name="nama_merk" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="merk.php" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="tambah">Tambah Merk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once "../../layout/footer.php";
?>