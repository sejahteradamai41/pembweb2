<?php
$arrayMahasiswa = [
    [
        'nama' => 'Dhea Marsella',
        'mata_kuliah' => 'Pemrograman Web 2',
        'nilai_uts' => 84,
        'nilai_uas' => 89,
        'nilai_tugas' => 78,
    ],[
        'nama' => 'Silvia',
        'mata_kuliah' => 'Basis Data',
        'nilai_uts' => 84,
        'nilai_uas' => 86,
        'nilai_tugas' => 93,
    ]
]
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Nilai Mahasiswa
			</h3> 
			<!-- <button type="button" class="btn btn-primary btn-md">
				Button
			</button> -->
            <a href="form_nilai.php" class="btn btn-primary btn-md">
                Tambah Data
            </a>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>
							No
						</th>
						<th>
							Nama Mahasiswa
						</th>
						<th>
							Mata Kuliah
						</th>
						<th>
							Nilai UTS
						</th>
                        <th>
                            Nilai UAS
                        </th>
                        <th>
                            Nilai Tugas
                        </th>
                        <th>
                            Rata-Rata
                        </th>
                        <th>
                            Grade
                        </th>
					</tr>
				</thead>
				<tbody>
					<?php
                    $nomor = 1;
                    foreach($arrayMahasiswa as $key => $value) : 
                    ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $value['nama']?></td>
                            <td><?= $value['mata_kuliah']?></td>
                            <td><?= $value['nilai_uts']?></td>
                            <td><?= $value['nilai_uas']?></td>
                            <td><?= $value['nilai_tugas']?></td>
                            <td><?= $ratarata= ($value['nilai_uts'] + $value['nilai_uas'] + $value['nilai_tugas']) / 3 ?></td>
                        </tr>
                    <?php
					if($ratarata >= 85 && $ratarata <= 100) {
						echo "A";
					} elseif($ratarata >= 70 && $ratarata<= 84) {
						echo"B";
					}	elseif($ratarata >= 56 && $ratarata<= 69) {
						echo"C";
					}	elseif($ratarata >= 36 && $ratarata<= 55) {
						echo"D";
					}	elseif($ratarata >=35) {
						echo"E";
					}
				  ?>
				  <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>