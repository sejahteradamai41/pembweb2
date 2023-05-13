<?php

require_once "../../../database/dbkoneksi.php";

$id = $_GET['id'];

function delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM pesanan WHERE id = $id");

    return mysqli_affected_rows($conn);
};

if (delete($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'pesanan.php';
        </script>
    ";
} else {
    echo mysqli_error($conn);
}
