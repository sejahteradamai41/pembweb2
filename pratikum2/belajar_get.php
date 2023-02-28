<?php
$nama =$_GET['nama'];
$jk =$_GET['jenis_kelamin'];
$umur =$_GET['umur'];
$tanggal_lahir =$_GET['tangga_lahir'];
$hobi =$_GET['hobi'];
$prodi =$_GET['prodi'];

echo "hasil Formulir pendafteran : <br>";
echo "nama :" . $nama . "<br>";
echo "Jenis_kelamin :" . $Jk . "<br>";
echo "umur :" . $umur . "<br>";
echo "tanggal_lahir :" . $tanggal_lahir . "<br>";
echo "hobi :";
foreach($hobi as $h){
    echo $h . ", ";
}
echo "Prodi" . $prodi  ."<br>";
