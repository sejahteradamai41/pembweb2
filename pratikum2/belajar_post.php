<?php
$nama = $_POST['nama'];
$jk =$_POST['jenis_kelamin'];
$umur =$_POST['umur'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$hobi =$_POST['hobi'];
$prodi =$_POST['prodi'];

echo "hasil Formulir pendafteran : <br>";
echo "nama :" . $nama . "<br>";
echo "jenis_kelamin :" . $jk . "<br>";
echo "umur :" . $umur . "<br>";
echo "tanggal_lahir :" . $tanggal_lahir . "<br>";
echo "hobi :";
foreach($hobi as $h){
    echo $h . ", ";
}
echo "Prodi" . $prodi  ."<br>";
