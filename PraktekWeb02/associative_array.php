<?php
$profileArray = [
    [
            "nama" => "Damai sejahtera giawa",
            "kelas" => "TI06",
            "IPK" => 4,
            "sudah_lulus" => false
    ], [
            "nama" => "Damai sejahtera giawa",
            "kelas" => "TI06",
            "IPK" => 4,
            "sudah_lulus" => false
    ]
    ];
foreach ($profileArray as $profile) {
      echo $profile['nama'];
    }