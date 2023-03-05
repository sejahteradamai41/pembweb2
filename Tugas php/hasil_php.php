<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-success">
                <th>nama</th>
                <th>produk</th>
                <th>jumlah</th>
                <th>total harga</th>
            </tr>
            <?php require_once "tugas_proses.php"; ?>
            <tr>
                <td><?= $customer; ?></td>
                <td><?= $radiobuttons; ?></td>
                <td><?= $jumlah; ?></td>
                <td><?= number_format($total_harga, 0); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>