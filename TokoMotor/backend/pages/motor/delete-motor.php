<?php

require_once "../../../database/dbkoneksi.php";

function delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM motor WHERE id = $id");

    return mysqli_affected_rows($conn);
};


$id = $_GET['id'];

if (delete($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'motor.php';
        </script>
    ";
} else {
    echo mysqli_error($conn);
}
